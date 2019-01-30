<link  href="/Materialize-stepper-master/dist/css/mstepper.min.css">
<script src="/Materialize-stepper-master/dist/js/mstepper.min.js"
<ul class="stepper horizontal horizontal-fix" id="horizontal-stepper-fix">
  <li class="step active">
    <div class="step-title waves-effect waves-dark">Step 1</div>
    <div class="step-new-content">
      <div class="row">
        <!-- Card -->
        <div class="card m-3">

          <!-- Card image -->
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title"><a>Card title</a></h4>
            <!-- Text -->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <!-- Button -->
            <a href="#" class="btn btn-primary">Button</a>

          </div>

        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card m-3">

          <!-- Card image -->
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title"><a>Card title</a></h4>
            <!-- Text -->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <!-- Button -->
            <a href="#" class="btn btn-primary">Button</a>

          </div>

        </div>
        <!-- Card -->
      </div>
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="email-horizontal-fix" type="email" class="validate form-control" required>
          <label for="email-horizontal-fix">Email</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction22">CONTINUE</button>
      </div>
    </div>
  </li>
  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 2</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="password-horizontal-fix" type="password" class="validate form-control" required>
          <label for="password-horizontal-fix">Your password</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feedback="someFunction22">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>
  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 3</div>
    <div class="step-new-content">
      Finish!
      <div class="step-actions">
        <button class="waves-effect waves-dark btn-sm btn btn-primary m-0 mt-4" type="button">SUBMIT</button>
      </div>
    </div>
  </li>
</ul>