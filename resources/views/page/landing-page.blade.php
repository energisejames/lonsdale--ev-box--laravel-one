@extends('layouts.lonsdale-master')
@section('content')
<style>
  .es-landing-one {
    background-color: #555;
  }
  .es-landing-two {
    background-color: #444;
  }
  .es-landing-form {
    background-color: #333;
  }
  .es-landing-form input {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
</style>
<section class="es-landing-one pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                  <!-- ESJF : header content -->
                  <h1>Charging Cable Replacement Registration Site</h1>
                  <h5>{{ "timestamp" == "not_set" ? "message if not set" : time() }}</h5>
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur faucibus sodales pharetra. Donec vel condimentum massa. Nam vel sollicitudin est, ac lacinia ex. Nullam mollis, turpis vitae vestibulum aliquet, nisl dui eleifend metus, sit amet semper lorem mi vitae ante. Vestibulum tincidunt aliquet fermentum. Vivamus tellus eros, ullamcorper vel sem ut, sollicitudin pretium arcu.</p>
                  <p>Praesent facilisis urna vel consequat aliquam. Sed ut ex pretium, fringilla dolor a, tempus est. Integer vel justo nibh. Sed interdum mattis massa, et maximus mauris rhoncus id. Curabitur sit amet consectetur diam, sed gravida felis. Vestibulum sollicitudin condimentum nisi. Nam ultrices porta metus, sit amet tincidunt nunc ullamcorper in. Etiam ornare ornare nibh eget gravida. Mauris molestie nulla non ex dapibus ultrices. Donec tempor efficitur sodales. Curabitur at tincidunt quam. Morbi ex erat, ullamcorper id luctus eget, viverra vel nisl. Curabitur bibendum posuere ipsum commodo vulputate. Integer sit amet libero sed arcu tincidunt scelerisque at et dui.</p>
            </div>
        </div>
    </div>
</section>
<hr />
<section class="es-landing-two pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Outline of the Process</h2>
                @if("not_set" == "not_set")
                  <div class="alert alert-success">The test is true</div>
                @else
                  <div class="alert alert-danger">The test isn't true</div>
                @endif
                <p>Donec mattis augue sed odio lobortis varius. Nullam porttitor elit non pulvinar aliquet. Vestibulum gravida fringilla augue dictum luctus. Donec eget lorem a ante maximus porta. In id risus eget risus lacinia ultrices. Curabitur at tempor ipsum, vel ullamcorper turpis. Phasellus nec dignissim orci, ut porttitor arcu. Maecenas eget nunc ac erat scelerisque ullamcorper eu ut tortor. Nulla facilisi. Sed sollicitudin turpis erat, eget ornare mauris volutpat id. Vestibulum vulputate ipsum a accumsan ullamcorper. Etiam vel mauris dictum, fringilla mi ut, auctor libero. Ut orci neque, euismod nec lorem sit amet, consectetur lacinia mi. Donec euismod rutrum mauris, non feugiat justo placerat nec. Etiam vitae mi sit amet augue imperdiet ultrices sodales a diam.</p>
                <p>Donec dolor purus, ullamcorper sed elit nec, dignissim fringilla dui. Integer tempus quam ac velit porttitor cursus. Praesent diam ex, tincidunt a dignissim in, dapibus in sapien. Praesent nisi est, porttitor quis ultrices ut, rutrum ut risus. Duis venenatis vel odio eu vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris pretium odio est, sed vehicula augue elementum in. Vestibulum dolor nunc, luctus ut metus eget, lobortis condimentum enim. Praesent mattis mauris eu rutrum elementum.</p>
                <ul>
                @for($i = 0; $i < 5; $i++)
                    <li>
                        List Item Number {{$i + 1}}
                    </li>
                @endfor
                </ul>
                <hr />
                {{"<script>alert('This annoying pop-up is prevented by XSS protection')</script>"}}
                {!!"<script>console.log('This console log is bypassing XSS protection')</script>"!!}
            </div>
        </div>
    </div>
</section>
<section class="es-landing-form pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="es-form">
                    <h2>Register</h2>
                    <p>Etiam vel mauris dictum, fringilla mi ut, auctor libero. Ut orci neque, euismod nec lorem sit amet, consectetur lacinia mi. Donec euismod rutrum mauris, non feugiat justo placerat nec. Etiam vitae mi sit amet augue imperdiet ultrices sodales a diam.</p>
                    <input />
                    <input />
                    <input />
                    <div class="btn btn-success p-2 w-100">Register</div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection