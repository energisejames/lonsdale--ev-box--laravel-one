@extends('layouts.lonsdale-master')
@section('content')
<style>
  .es-my-account-one {
    background-color: #555;
  }
  .es-my-documents-list {
    background-color: #222;
  }
  .es-form input {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
  .es-form .es-file-select {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
    height: 80px;
  }
  .es-form select {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
  .es-detail {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
</style>
<section class="es-my-account-one pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                  <!-- flash temporary data to screen to test dependency injection -->
                  @if(Session::has('info'))
                  <div class="alert alert-info">{{ Session::get('info') }}</div>
                  @endif
                  <!-- check if uploaded supporting documents before your account verified -->
                  @if("supporting_documents" == "not_set")
                      <!-- you need to upload supporting documents before your account can be verified -->
                  @else
                      <div class="alert alert-warning">You need to upload supporting documents before your account can be verified</div>
                  @endif
                  <!-- check if account status verified -->
                  @if("account_status" == "pending")
                      <div class="es-account-status"><h3>Account Status : <span class="badge bg-success p-3">Verified</span></h3></div>
                  @else
                      <div class="es-account-status"><h3>Account Status : <span class="badge bg-info p-3">Pending</span></h3></div>
                  @endif
                  <!-- ESJF : header content -->
                  <h1 class="pt-4">My Details</h1>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="es-detail">Some Text</div>
                      </div>
                      <div class="col-md-6">
                          <div class="es-detail">Some Text</div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="es-detail">Some Text</div>
                      </div>
                      <div class="col-md-6">
                          <div class="es-detail">Some Text</div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="es-detail">Some Text</div>
                      </div>
                      <div class="col-md-6">
                          <div class="es-detail">Some Text</div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</section>
<hr />
<section class="es-supporting-documents pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Supporting Documents</h2>
                <p>Donec mattis augue sed odio lobortis varius. Nullam porttitor elit non pulvinar aliquet. Vestibulum gravida fringilla augue dictum luctus. Donec eget lorem a ante maximus porta. In id risus eget risus lacinia ultrices. Curabitur at tempor ipsum, vel ullamcorper turpis. Phasellus nec dignissim orci, ut porttitor arcu. Maecenas eget nunc ac erat scelerisque ullamcorper eu ut tortor. Nulla facilisi. Sed sollicitudin turpis erat, eget ornare mauris volutpat id. Vestibulum vulputate ipsum a accumsan ullamcorper. Etiam vel mauris dictum, fringilla mi ut, auctor libero. Ut orci neque, euismod nec lorem sit amet, consectetur lacinia mi. Donec euismod rutrum mauris, non feugiat justo placerat nec. Etiam vitae mi sit amet augue imperdiet ultrices sodales a diam.</p>
                <form class="es-form">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="es-file-select" />
                        </div>
                        <div class="col-md-4">
                            <select>
                                <option value="not_set">Type of Document</option>
                                <option value="certificate_professional">Professional Competency / Certification</option>
                                <option value="certificate_insurance">Insurance Certificate</option>
                                <option value="certificate_trade">Trade / Education Certificate</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="btn btn-secondary w-100" >Upload</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="es-my-documents-list pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>My Documents</h3>
                <div class="row">
                    <div class="col-md-4">
                        Document Filename
                    </div>
                    <div class="col-md-4">
                        Document Type
                    </div>
                    <div class="col-md-4">
                        Date Uploaded
                    </div>
                </div>
                <hr />
                @for($i = 0; $i < 5; $i++)
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" download>Document-File-Number-{{$i + 1}}.pdf</a>
                        </div>
                        <div class="col-md-4">
                            Insurance Certificate
                        </div>
                        <div class="col-md-4">
                            {{date("l jS \of F Y h:i:s A")}}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endsection