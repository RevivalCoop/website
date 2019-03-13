<?php get_header(); ?>

<main>
  <h1><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/revival-logo.svg" alt="Revival Coop" /></h1>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center">About Revival</h2>
          <p class="lead text-center">
            We are a creative co-operative of designers and engineers specializing in branding, web development,
            and design.
          </p>
          <h3 class="mt-5">Services</h3>
          <div class="row">
            <div class="col">
              <h4 class="h5">Branding and Identity Design</h4>
              <p>Creating unique and simple yet effective graphic design elements and standards that communicate an organization's brand and values with beauty and clarity.</p>
            </div>
            <div class="col">
              <h4 class="h5">Web Development, Design, and Consulting</h4>
              <p>
                Building well engineered and thoughtfully designed web experiences and tools that help organizations achieve their goals quickly and under budget.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="work">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Our Work</h2>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="card">
                <img class="card-img-top" alt="Center on Crime and Community Resilience Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/ccr-logo.png" />
                <div class="card-body">
                  <h3 class="card-title h4">Center on Crime and Community Resilience</h3>
                  <p>
                    Northeastern's Center on Crime and Communuity Resilience needed a brand identity and
                    web presence that helped reach research potential partners and show off their work.
                  </p>
                  <h4 class="h5">Services</h4>
                  <ul>
                    <li>Branding</li>
                    <li>Web Design</li>
                    <li>Web Development</li>
                    <li>Consulting</li>
                  </ul>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/pixability-logo.png" />
                <div class="card-body">
                  <h3 class="card-title h5">Pixability</h3>
                  <p>
                    Pixability's marketing team has great ideas and needed help translating them into a digital form.
                    We helped them create a feature rich website that got their message on video analytics to the world.
                  </p>
                  <ul>
                    <li>Web Development</li>
                    <li>Consulting</li>
                    <li>Product Design</li>
                  </ul>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/tekworx-logo.svg" />
                <div class="card-body">
                  <h3 class="card-title h5">TekWorx</h3>
                  <p>

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
