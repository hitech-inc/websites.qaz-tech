@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div>col-md-offset-2 -->

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 style="text-align: center;">Добро пожаловать <span>{{ Auth::user()->name }}!</span></h3>
                </div>
            </div>
        </div>
        <div class="col-md-12">
          <table class="table table-bordered mytable" style="background-color: #fff">
          <thead>
            <tr>
              <th>Наименование &nbsp;<span>{{ "(". $countArr['nameCount'] . ")" }}</span></th>
              <th>Разработка&nbsp;<span>{{ "(". $countArr['developmentCount'] . ")" }}</span></th>
              <th>Тех.поддержка &nbsp;<span>{{ "(". $countArr['supportCount'] . ")" }}</span></th>
              <th>Контекстная реклама &nbsp;<span>{{ "(" . $countArr['contextual_advertisingCount'] . ")" }}</span></th>
              <th>SEO&nbsp;<span>{{ "(" . $countArr['seoCount'] . ")" }}</span></th>
              <th>SMM&nbsp;<span>{{ "(" . $countArr['smmCount'] . ")" }}</span></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $sites as $site)
            <tr>
              <td>{{ $site->name }}</td>
              <td>{{ $site->development }}</td>
              <td>{{ $site->support }}</td>
              <td>{{ $site->contextual_advertising }}</td>
              <td>{{ $site->seo }}</td>
              <td>{{ $site->smm }}</td>
            </tr>
            @endforeach
          </tbody>
        </table> 
        </div>
    </div>
</div>
@endsection
