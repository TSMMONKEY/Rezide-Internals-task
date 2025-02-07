<section clas class="contact mt-5">
  <div class="logo-with-no-text mt-3 mb-3">
    <div class="black-line"></div>
    <img
    src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
      alt=""
      width="35px"
    />
    <div class="black-line"></div>
  </div>

  <div class="row contact-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/map.png');">
    <div class="col-6 form-section p-5 text-white">
      <h2 class="text-white">Got a question?</h2>
      <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
  <div class="form-floating">
  <input type="hidden" name="action" value="submit_contact_form">
    <input
      type="text"
      class="form-control"
      id="floatingName"
      name="name"
      placeholder="Name"
    />
    <label for="floatingName">Name</label>
  </div>
  <div class="form-floating mb-3">
    <input
      type="email"
      class="form-control"
      id="floatingInput"
      name="email"
      placeholder="name@example.com"
    />
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating mb-3">
    <input
      type="tel"
      class="form-control"
      id="floatingPhone"
      name="phone"
      placeholder="Phone"
    />
    <label for="floatingPhone">Phone</label>
  </div>
  <div class="form-floating">
    <textarea
      class="form-control"
      name="message"
      placeholder="Leave a comment here"
      id="floatingTextarea2"
      style="height: 100px"
    ></textarea>
    <label for="floatingTextarea2">Message</label>
  </div>
  <div class="form-check my-4">
    <input
      class="form-check-input"
      type="checkbox"
      name="terms_and_conditions"
      id="flexCheckDefault"
      value="yes"
    />
    <label class="form-check-label text-white" for="flexCheckDefault">
      I agree to the terms in your
      <a href="#" class="text-white fw-bold">Privacy Policy</a>
    </label>
  </div>
  <button type="submit" name="submit" class="btn btn-warning main-btn">SEND</button>
</form>

    </div>
      <div class="col-6">
        <a href="/" class="btn btn-warning main-btn main-green-btn">Directions</a>
      </div>
  </div>
</section>