@extends('leyout')
@section('contuct-section')
  
  <section class="form-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 bg-info"></div>
        <div class="col-sm-8">
          <div class="cont_principal">

            <div class="cont_centrar">
            <div class="cont_login">
              <form action="">
              <div class="cont_tabs_login">
                <ul class='ul_tabs'>
                  <li class="active"><a href="#" onclick="sign_in()">SIGN IN</a>
                  <span class="linea_bajo_nom"></span>
                  </li>
                  <li><a href="#up" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
                  </li>
                </ul>
                </div>
            <div class="cont_text_inputs">
                <input type="text" class="input_form_sign " placeholder="NAME" name="name_us" />
                
              
              {{-- <input type="text" class="input_form_sign d_block active_inp" placeholder="age" name="age" /> --}}
              <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="phone" />
               {{-- <textarea class="" name="problom" id="" cols="30" rows="1" placeholder="inter the problom"></textarea> --}}
               
              <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass_us" />  
              <input type="text" class="input_form_sign " placeholder="ENTER THE PROBLEM" name="name_us" />
              
              <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
          <div class="terms_and_cons d_none">
              
            
              </div>
                </div>
          <div class="cont_btn">
               <button class="btn_sign">SIGN IN</button>
                
                </div>
                
              </form>
              </div>
              
            </div>
            
          
          </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
    </div>
  </section>
@endsection