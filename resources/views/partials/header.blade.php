<header class="site-header">
  <nav class="main-navigation">
   <div class="container">
    <div class="row menu-item">
       <div class="col-xs-2">link 1</div>
       <div class="col-xs-2 link_element">link 1</div>
       <div class="col-xs-2 link_element">link 1</div>
       <div class="col-xs-2 link_element">link 1</div>
       <div class="col-xs-2 link_element">link 1</div>
       <div class="col-xs-2 link_element">link 1</div>
    </div>
  </div>
  </nav>
  <section class="section-logo-site-signup">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
              <div class="col-md-6">
                <img src="/site-img/pro_escorts_logo.png" width="140">
              </div>
              <div class="col-md-6 format_logo">
                  <img src="{{asset("site-img/logo.png")}}"/>
                  {{-- <span class="start_logo_name">Pro</span><span class="end_logo_name">Escorts</span> --}}
              </div>
            </div>
        </div>
        <div class="col-md-4 format_sign_up_form">
            <span>Esti sau cauti o escorta?</span>
            <div class="sign_up_form">
                <img src="{{ asset("site-img/sign_up.png") }}" width="30"><a href="#">Inscrie-te acum!</a>
            </div>
        </div>
        <div class="col-md-4">
          <span>Daca ai deja cont, te poti loga aici:</span>
          <div class="sign-in-form">
              {!! Form::open(['autocomplete'=>'off']) !!}
              <div class="log-in-inputs">
                {!! Form::email(' email',null,['class'=>'form-control format_inputs','id'=>'inputId']) !!}
                {!! Form::password('password',['class'=>'form-control format_inputs']) !!}
              </div>
              <div class="log-in-buttons">
                  {!! Form::submit('Logare',['class'=>"form-control format-login-button"]) !!}
              </div>
              {!! Form::close() !!}
         </div>
    </div>
  </div>
</div>
  </section>
  <nav class="second-navigation">
    this one might be removes, will have to see about that.
  </nav>
</header>
