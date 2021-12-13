<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

use Ramsey\Uuid\Uuid;
use Laravolt\Indonesia\Models\Province;
use App\Models\Pesanan;
use App\Models\PesananProduk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function checkoutView(Request $request)
    {
        error_log($_POST['item'][0]['id_product']);
        $provinces = Province::pluck('name', 'code');

        return view('user/checkout', [
            'product' => $_POST['item'],
            'provinces' => $provinces
        ]);
    }

    public function createPesanan()
    {
        $uuid4 = Uuid::uuid4();
        $metode = "";
        if ($_POST['ship'] == 18000) {
            $metode = "reguler";
        } else {
            $metode = "oneday";
        }
        Pesanan::create([
            'id' => $uuid4,
            'id_user' => Auth::user()->id,
            'metode' => $metode,
            'name' => $_POST['name'],
            'province' => $_POST['province'],
            'address' => $_POST['address'],
            'city' => $_POST['city'],
            'district' => $_POST['district'],
            'village' => $_POST['village'],
            'phone' => $_POST['phone'],
        ]);

        for ($i = 0; $i < count($_POST['item']); $i++) {
            PesananProduk::create([
                'id_pesanan' => $uuid4,
                'id_product' => $_POST['item'][$i]['id_product'],
                'orientation' => $_POST['item'][$i]['orientation'],
                'qty' => $_POST['item'][$i]['qty'],
            ]);
        }

        Cart::where('id_user', Auth::user()->id)->delete();

        return redirect()->route('detailPesananView', $uuid4);
    }

    public function index($id)
    {
        $pesanan = Pesanan::where(['id_user' => Auth::user()->id, 'id' => $id])->get();

        return view('user/pesananview', ['pesanan' => $pesanan]);
    }
    public function pay(Request $request, $id)
    {
        $this->validate($request, [
            'proof' => 'required',
        ]);

        $pesanan = Pesanan::where(['id_user' => Auth::user()->id, 'id' => $id])->get();

        $file = $request->file('proof');
        if ($pesanan->count() == 0) {
            abort(403);
        } else {
            $filename = "Proof-" . $id . $file->getClientOriginalExtension();
            $pesanans = Pesanan::where(['id_user' => Auth::user()->id, 'id' => $id])
                ->update(['status' => 1, 'pic_proof' => $filename]);
            $tujuan_upload = 'payment_proof';
            $file->move($tujuan_upload, $filename);
        }

        return view('user/pesananview', ['pesanan' => $pesanan]);
    }
    public function detailPesanan($id)
    {
        $pesanan = Pesanan::where(['id_user' => Auth::user()->id, 'id' => $id])->get();
        $pesananProduk = DB::table('pesanan_produks')->join('products', 'products.id', '=', 'pesanan_produks.id_product')->where('id_pesanan', '=', $id)->select('products.id', 'products.price', 'pesanan_produks.qty', 'pesanan_produks.orientation', 'products.name', 'products.category')->get();
        if ($pesanan->count() == 0) {
            abort(404);
        }
        return view('user/invoice', ['pesanan' => $pesanan, 'pesananProduk' => $pesananProduk]);
    }
}
