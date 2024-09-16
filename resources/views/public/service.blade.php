@extends('layout.app')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Services &amp; Pricing</h2>
        <div class="intro">
            <p>I have 4+ years of development experience building software for the web and mobile devices. You can take a look at my <a href="{{ route('portfolio')}}" target="_blank">project portfolio</a> and <a href="{{ route('resume')}}" target="_blank">online resume</a> to find out more about my skills and experiences.</p>
            <p class="mb-0">I'm currently taking on freelance software development work. You're welcome to contact me for a custom quote for your project. I also offer development service packages with fixed pricing. </p>
        </div>
    </div>
</section>

<section class="pricing-section p-3 p-lg-5">
  <div class="container single-col-max-width">
      <h3 class="text-center mb-4">Service Packages</h3>
      <div id="pricing-tabs" class="pricing-tabs d-block d-md-none mb-3">
          <a href="#" class="pricing-tab active mb-2" data-tab-target="pricing-1-data">Basic</a>
          <a href="#" class="pricing-tab mb-2" data-tab-target="pricing-2-data">Standard</a>
          <a href="#" class="pricing-tab" data-tab-target="pricing-3-data">Premium</a>
      </div><!--//pricing-mobile-tabs-->

      <table id="pricing-table" class="pricing-table table-bordered">
          <thead>
              <tr class="border-0">
                  <th scope="col" class="pricing-0-data theme-bg-light"></th>
                  <th scope="col" class="pricing-package-title pricing-data pricing-1-data">Basic</th>
                  <th scope="col" class="pricing-package-title pricing-data pricing-2-data mobile-is-hidden">Standard</th>
                  <th scope="col" class="pricing-package-title pricing-data pricing-3-data mobile-is-hidden">Premium</th>
              </tr>
          </thead>
          <tbody>
              <tr class="pricing-price-row">
                  <th scope="row" class="pricing-0-data">Package Price</th>
                  <td class="pricing-data pricing-1-data"><span class="price-number">$200</span></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="price-number">$400</span></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><span class="price-number">Custom</span></td>
              </tr>

              <tr class="pricing-desc-row">
                  <th scope="row" class="pricing-0-data">Details</th>
                  <td class="pricing-data pricing-1-data"><span class="pricing-package-desc">A simple website or web application for small businesses or personal use, covering basic functionalities.</span></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="pricing-package-desc">A more dynamic web application with moderate features, ideal for growing businesses.</span></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><span class="pricing-package-desc">A complex, large-scale web application tailored to your specific needs, with advanced functionality.</span></td>
              </tr>

              <tr class="pricing-feature-row">
                  <th class="pricing-feature-row-name pricing-0-data" scope="row">Responsive Design<br><small class="feature-desc font-weight-normal text-muted">Ensuring your website looks great on all devices.</small></th>
                  <td class="pricing-data pricing-1-data"><i class="fas fa-check text-primary"></i></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
              </tr>
              
              <tr class="pricing-feature-row">
                  <th class="pricing-feature-row-name pricing-0-data" scope="row">Custom Features<br><small class="feature-desc font-weight-normal text-muted">Specific functionality based on your business needs.</small></th>
                  <td class="pricing-data pricing-1-data"><span class="text-muted"><i class="fas fa-check text-primary"></i></span></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
              </tr>

              <tr class="pricing-feature-row">
                  <th class="pricing-feature-row-name pricing-0-data" scope="row">SEO Optimization</th>
                  <td class="pricing-data pricing-1-data"><span class="text-muted">–</span></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
              </tr>

              <tr class="pricing-feature-row">
                  <th class="pricing-feature-row-name pricing-0-data" scope="row">E-Commerce Integration</th>
                  <td class="pricing-data pricing-1-data"><span class="text-muted">–</span></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="text-muted">–</span></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><i class="fas fa-check text-primary"></i></td>
              </tr>

              <tr class="pricing-feature-row">
                  <th class="pricing-feature-row-name pricing-0-data" scope="row">Revisions</th>
                  <td class="pricing-data pricing-1-data"><span class="text-muted">1</span></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><span class="text-muted">2</span></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden">5+</td>
              </tr>

              <tr class="pricing-feature-row">
                  <th class="pricing-feature-row-name pricing-0-data" scope="row">Delivery Time</th>
                  <td class="pricing-data pricing-1-data">7 days</td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden">14 days</td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden">Depends on project complexity</td>
              </tr>

          </tbody>
          <tfoot>
              <tr class="pricing-cta-row">
                  <td class="pricing-0-data"></td>
                  <td class="pricing-data pricing-1-data"><a class="btn btn-primary" href="{{ route('contact')}}">Book Now</a></td>
                  <td class="pricing-data pricing-2-data mobile-is-hidden"><a class="btn btn-primary" href="{{ route('contact')}}">Book Now</a></td>
                  <td class="pricing-data pricing-3-data mobile-is-hidden"><a class="btn btn-primary" href="{{ route('contact')}}">Get A Quote</a></td>
              </tr>
          </tfoot>
      </table><!--//pricing-table-->

  </div><!--//container-->
</section>

<section class="faq-section">
  <div class="container single-col-max-width">
      <h3 class="text-center mb-4">FAQs</h3>
      <div class="text-center mb-5">Here are some frequently asked questions to help you understand our services better.</div>
      <div id="faq-accordion" class="faq-accordion accordion mx-auto text-start">

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-1">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                  What services do you offer?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-1">
                  <div class="accordion-body text-start">
                    We offer website development services including WordPress websites, custom web applications, and large-scale enterprise solutions. Whether you need a personal site, eCommerce platform, or business management system, we’ve got you covered.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-2">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                  How long does it take to build a website?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-2">
                  <div class="accordion-body text-start">
                    The timeline depends on the complexity of the project. A simple WordPress website can be completed within 1-2 weeks, while more complex custom applications may take 4-6 weeks or more, depending on your requirements.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-3">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                  Do you provide website maintenance and support?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-3">
                  <div class="accordion-body text-start">
                    Yes, we offer ongoing website maintenance and support services. This includes updates, security patches, content updates, and any necessary troubleshooting to ensure your website runs smoothly after it goes live.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-4">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                  Can you help with SEO and marketing?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-4">
                  <div class="accordion-body text-start">
                    Absolutely! We provide SEO services to optimize your website for search engines and can guide you through digital marketing strategies to help increase your online visibility and reach your target audience.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-5">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                  How much does it cost to build a website?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-5">
                  <div class="accordion-body text-start">
                    Pricing depends on the scope of the project. A WordPress website starts at $200, while medium-sized web applications start at $400, and large-scale custom solutions can be upwards of $1000. We can provide a detailed quote based on your specific needs.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-6">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                  Can I make updates to my website after it's live?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq6" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-6">
                  <div class="accordion-body text-start">
                    Yes, we provide easy-to-use CMS (Content Management System) solutions, such as WordPress, that allow you to make updates to your website yourself. We also offer training if needed, or we can manage the updates for you.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-7">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                  Will my website be mobile-friendly?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq7" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-7">
                  <div class="accordion-body text-start">
                    Yes, all the websites we build are fully responsive, meaning they will look and function beautifully on mobile devices, tablets, and desktops. We ensure that your site provides an excellent user experience regardless of the device.
                  </div>
              </div>
          </div><!--//accordion-item-->

          <div class="accordion-item mb-3 rounded">
              <h2 class="accordion-header border-0 px-4 py-3 rounded theme-bg-light" id="faq-heading-8">
                <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                  Do you offer eCommerce solutions?<i class="fas fa-chevron-down"></i>
                </button>
              </h2>
              <div id="faq8" class="accordion-collapse collapse border-0" aria-labelledby="faq-heading-8">
                  <div class="accordion-body text-start">
                    Yes, we specialize in building secure and user-friendly eCommerce websites. From payment gateway integration to inventory management, we provide end-to-end solutions to help you run a successful online store.
                  </div>
              </div>
          </div><!--//accordion-item-->

      </div>
  </div>
</section>

@endsection
