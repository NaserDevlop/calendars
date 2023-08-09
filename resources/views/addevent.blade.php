@extends('layouts.auth')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
     <!-- Section: Design Block -->
     <section class="background-radial-gradient overflow-hidden">
        <style>
          .background-radial-gradient {
            /* background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
              radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%); */
                background-color: #DD042B;
          }

          /* #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          } */
          #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient( #fff , #ffffffd6);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#fff, #ffffffd6);
            overflow: hidden;
          }

          .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
          }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
              <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                Welcome to <br>
                <span style="color: #F49712">Petromin Corporation</span>
              </h1>
              <p class="mb-4 opacity-70" style="color:#fff">
                Petromin Corporation is a leading multi-national organization in the Kingdom of Saudi Arabia. We stand as a strong transformative force, enabling the movement of people, products and services through sustainable and innovative mobility solutions serving individuals and businesses alike – We help you move!
              </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
              <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
              <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

              <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">
                  <!-- --------------------------   -->
                  <form method="POST" action="/createnew">
                        @csrf

                    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="title" name="title" class="form-control ui-autocomplete-input test" autocomplete="off"  >
                      <label class="form-label" for="title" style="margin-left: 0px;"> Event Title </label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" id="start" name="start-date" min="2023-07-01" max="2024-12-31" class="form-control ui-autocomplete-input test active" autocomplete="off"  >
                          <input style="display:none" type="tel"   id="month" name="month" value=""  >
                          <input style="display:none" type="tel"   id="day" name="day"  value=""  >
                          <label class="form-label" for="start" style="margin-left: 0px;">Start date</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" id="end" name="end-date" min=" " max="2024-12-31" class="form-control ui-autocomplete-input test active" autocomplete="off"  >
                          <label class="form-label" for="end" style="margin-left: 0px;">End date</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
                      </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="info" name="info" class="form-control ui-autocomplete-input test" autocomplete="off"  >
                      <label class="form-label" for="infi" style="margin-left: 0px;">Event info</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="note" name="note" class="form-control test"  >
                      <label class="form-label" for="note" style="margin-left: 0px;">Note</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input class="form-check-input me-2" type="checkbox"   id="has-mail" name="has-mail" checked=""   >
                      <input style="display:none" type="text"   id="hasemail" name="hasemail"  value="1"  >
                      <input style="display:none" type="tel"   id="serial" name="serial"   >
                      <label class="form-check-label" for="has-mail">
                        Send email with this event
                      </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                     Add Event
                    </button>

                    <!-- Register buttons 
                    <div class="text-center">
                      <p>or sign up with:</p>
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>

                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>

                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>
        // Date object



document.getElementById("start").onchange = function ()
{
  var input = document.getElementById("end");
    input.min = this.value;
 
 const date = new Date(this.value);

let currentDay= String(date.getDate()).padStart(2, '0');
document.getElementById("day").value =currentDay;

let currentMonth = String(date.getMonth()+1).padStart(2,"0");
document.getElementById("month").value =currentMonth;

let currentYear = date.getFullYear();

// we will display the date as DD-MM-YYYY 

let currentDate = `${currentDay}-${currentMonth}-${currentYear}`;

}
//-------------------------------------------------------------
document.getElementById("has-mail").onchange = function ()
{
var  mail = document.getElementById("has-mail");
if(mail.checked)
{
  document.getElementById("hasemail").value =1;
} else{
  document.getElementById("hasemail").value =0;
}
}
// -----------------------------------------------------------
 $(document).ready(function(){
          $(".alert").slideDown(300).delay(5000).slideUp(300);
    });
       </script>
       
      <script>
        let serialnum = Math.random();
        serialnum *=100000000000000000;
        console.log(serialnum);
document.getElementById("serial").value =serialnum;
</script>
  <!-- Section: Design Block -->