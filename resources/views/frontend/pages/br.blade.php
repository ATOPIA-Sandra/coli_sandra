<!-- Page loader Start -->
  <!-- <div id="pageloader">   
    <div class="loader-item">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
  </div> -->
  <!-- Page loader End -->

  @include('frontend.pages.header')
  <!-- Fullscreen Slider Start -->
  @include('frontend.pages.sidebar')
  <!-- Fullscreen Slider End -->

  <!-- Main Body Content Start -->
  <main id="body-content">
    <!-- Contact Callout Start -->
    @yield('content')
    <!-- Contact Callout End -->

  </main>
  <!-- Main Body Content Start -->

  <!-- Main Footer Start -->
  @include('frontend.pages.footer')
  
  <!-- Main Footer End -->

  <!-- Search Popup Start -->
  <div class="overlay overlay-hugeinc">    
    <form class="form-inline mt-2 mt-md-0">
      <div class="form-inner">
        <div class="form-inner-div d-inline-flex align-items-center no-gutters">
          <div class="col-md-1">
            <i class="icofont-search"></i>
          </div> 
          <div class="col-10">
            <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
          </div>
          <div class="col-md-1">
            <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- Search Popup End -->

  <!-- Back To Top Start -->
  <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
  <!-- Back To Top End -->

  <!-- Request Modal -->
  <div class="modal fade" id=request_popup tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered request_popup" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <!-- Contact Details Start -->
          <section class="pos-rel bg-light-gray">
            <div class="container-fluid p-0">
              <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="icofont-close-line"></i>
                </a>
              <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md" style="box-shadow: 0px 18px 76px 0px rgba(0, 0, 0, 0.06);">
                <div class="col bg-fixed bg-img-7 request_pag_img">
                    &nbsp;
                </div>


                <div class="col-md-7 col-12">
                    <div class="px-3 m-5">
                      <h2 class="h2-xl mb-4 fw-6">Request A Quote</h2>                       
                      <form action="#" method="post" novalidate="novalidate" class="rounded-field">
                          
                          <div class="form-row mb-4">
                            <div class="col">
                              <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                                  <option value="">Freight Type</option>
                                  <option value="Type 1">Type 1</option>
                                  <option value="Type 2">Type 2</option>
                                  <option value="Type 3">Type 3</option>
                                  <option value="Type 4">Type 4</option>
                              </select>
                            </div>
                            <div class="col">
                              <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                                  <option value="">Incoterms</option>
                                  <option value="Type 1">Type 1</option>
                                  <option value="Type 2">Type 2</option>
                                  <option value="Type 3">Type 3</option>
                                  <option value="Type 4">Type 4</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <input type="text" name="name" class="form-control" placeholder="City of departure">
                            </div>
                            <div class="col">
                              <input type="text" name="email" class="form-control" placeholder="Delivery city">
                            </div>
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <input type="text" name="name" class="form-control" placeholder="Total gross weight (KG)">
                            </div>
                            <div class="col">
                              <input type="text" name="email" class="form-control" placeholder="Dimension">
                            </div>
                          </div>

                          <div class="form-row">
                            <div class="col">
                              <div class="center-head"><span class="bg-light-gray txt-orange">Your Personal Details</span></div>
                            </div>
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <input type="text" name="name" class="form-control mb-3" placeholder="Your Name">
                              <input type="text" name="name" class="form-control mb-3" placeholder="Email">
                              <input type="text" name="name" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col">
                              <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col pt-3">
                              <button type="submit" class="form-btn btn-theme bg-orange">Send Message <i class="icofont-rounded-right"></i></button>
                            </div>
                          </div>
                      </form>        
                    </div>  
                </div>
              </div>
            </div>        
          </section>
          <!-- Contact Details End -->
        </div>
      </div>
    </div>
  </div>