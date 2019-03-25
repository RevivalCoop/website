<?php get_header(); ?>

<main>
  <section>
    <p class="lead text-center">
      We are a creative co-operative of designers and engineers specializing in branding, web development,
      and design.
    </p>
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

              <hr />

              <!--<div class="card reverse">
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

              <hr class="reverse" /

              <div class="card reverse">
                <img class="card-img-top p-5" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/tekworx-logo.svg" />
                <div class="card-body">
                  <h3 class="card-title h5">TekWorx</h3>
                  <p>
                    TekWorx needed a site refresh and help building tools to draw in new leads. We created
                    a calculator tool and integrated it with their marketing automation system to track potential customers.
                  </p>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr />

  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center">About Revival</h2>
          <p class="lead text-center">
            We are a close-knit group of passionate creators who want to partner with you to make interesting, well-designed systems that accomplish your goals.
          </p>
          <h3 class="mt-5">Services</h3>
          <div class="row">
            <div class="col-md-4 offset-md-2 service">
              <h4 class="h5">Branding and Identity Design</h4>
              <p>Creating unique and simple yet effective graphic design elements and standards that communicate an organization's brand and values with beauty and clarity.</p>
            </div>
            <div class="col-md-4 service">
              <h4 class="h5">Web Development, Design, and Consulting</h4>
              <p>
                Building well engineered and thoughtfully designed web experiences and tools that help organizations achieve their goals quickly and under budget.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="workers">
        <div class="row">
          <div class="col-md-4 offset-md-2">
            <p class="display-1">:-)</p>
            <span class="display-4">Sean Beck</span>
          </div>
          <div class="col-md-4">
            <p class="display-1">:-P</p>
            <span class="display-4">Colin Robison</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-2">
            <p class="display-1">:-D</p>
            <span class="display-4">Mary Nastasi</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="reverse" />

  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Contact Revival</h2>
          <?php echo do_shortcode('[wpforms id="5" title="false" description="false"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
