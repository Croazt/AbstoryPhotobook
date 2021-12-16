@extends('layouts.master')

@section('main_content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profil {{auth()->user()->role}}</h1>
          </div>

          <div class="section-body">
          <div class="section-body">
    <h2 class="section-title">Hi, {{auth()->user()->name}}!</h2>
    <p class="section-lead">
      Ini dia informasi tentang diri lo!
    </p>

    <div class="row mt-sm-12">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            <img alt="image" src="{{auth()->user()->getFoto()}}" class="rounded-circle profile-widget-picture">
            <div class="profile-widget-items">
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Nama</div>
                <div class="profile-widget-item-value">{{auth()->user()->name}}</div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Job</div>
                <div class="profile-widget-item-value">{{auth()->user()->role}}</div>
              </div>
              <div class="profile-widget-item">
                <div class="profile-widget-item-label">Email</div>
                <div class="profile-widget-item-value">{{auth()->user()->email}}</div>
              </div>
            </div>
          </div>
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{auth()->user()->name}} <div class="text-muted d-inline font-weight-normal">
                <div class="slash"></div> {{auth()->user()->role}}
              </div>
            </div>
            Ini adalah Bio dari Profil User
          </div>
          <div class="card-footer text-center">
        </div>
      </div>
          </div>
        </section>
      </div>

@endsection