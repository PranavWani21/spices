<?php

echo "  
<div class='topbar transition'>
  <div class='bars'>
      <button type='button' class='btn transition' id='sidebar-toggle'>
          <i class='fa fa-bars'></i>
      </button>
  </div>
      <div class='menu'>
          <ul>"; 

        //   echo "
        //       <li class='nav-item dropdown dropdown-list-toggle'>
        //           <a class='nav-link' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
        //              <i class='fa fa-bell size-icon-1'></i><span class='badge bg-danger notif'>4</span>
        //           </a> 				 
        //           <div class='dropdown-menu dropdown-list'>
        //               <div class='dropdown-header'>Notifications</div>
        //               <div class='dropdown-list-content dropdown-list-icons'>
        //                   <div class='custome-list-notif'> 
        //                   <a href='#' class='dropdown-item dropdown-item-unread'>
        //                       <div class='dropdown-item-icon bg-primary text-white'>
        //                         <i class='fas fa-code'></i>
        //                       </div>
        //                       <div class='dropdown-item-desc'>
        //                           The Atrana template has the latest update!
        //                         <div class='time text-primary'>3 Min Ago</div>
        //                       </div>
        //                     </a>

        //                     <a href='#' class='dropdown-item'>
        //                       <div class='dropdown-item-icon bg-info text-white'>
        //                         <i class='far fa-user'></i>
        //                       </div>
        //                       <div class='dropdown-item-desc'>
        //                          Sri asks you for friendship!
        //                         <div class='time'>12 Hours Ago</div>
        //                       </div>
        //                     </a>

        //                     <a href='#' class='dropdown-item'>
        //                       <div class='dropdown-item-icon bg-danger text-white'>
        //                         <i class='fas fa-check'></i>
        //                       </div>
        //                       <div class='dropdown-item-desc'>
        //                           Storage has been cleared, now you can get back to work!
        //                         <div class='time'>20 Hours Ago</div>
        //                       </div>
        //                     </a>

                        
        //                     <a href='#' class='dropdown-item'>
        //                       <div class='dropdown-item-icon bg-info text-white'>
        //                         <i class='fas fa-bell'></i>
        //                       </div>
        //                       <div class='dropdown-item-desc'>
        //                           Welcome to Atrana Template, I hope you enjoy using this template!
        //                         <div class='time'>Yesterday</div>
        //                       </div>
        //                     </a>

        //                   </div>
        //               </div>

        //               <div class='dropdown-footer text-center'>
        //                 <a href='#'>View All</a>
        //               </div>

                    
        //         </li>"; 
           
               echo "<li class='nav-item dropdown'>
                  <a class='nav-link' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                    <img src='assets/images/avatar/avatar-1.png' alt=''>
                  </a>
                  <ul class='dropdown-menu' aria-labelledby='navbarDropdown'> ";


                    //   <a class='dropdown-item' href='my-profile.html'><i class='fa fa-user size-icon-1'></i> <span>My Profile</span></a>  
                    //   <a class='dropdown-item' href='settings.html'><i class='fa fa-cog size-icon-1'></i> <span>Settings</span></a>
                    //   <hr class='dropdown-divider'>
                     
                     
                      echo "<a class='dropdown-item' href='../partials/logout.php'><i class='fa fa-sign-out-alt  size-icon-1'></i> <span>Logout</span></a>
                  </ul>
                </li>
          </ul>
      </div>
  </div>

  
  <div class='sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft'>
      <div class='sidebar-content'> 
          <div id='sidebar'>
          
          
          <div class='logo'>
                  <h2 class='mb-0'><img src='assets/images/logo.png'> SkySpices</h2>
          </div>

          <ul class='side-menu'>
              <li>
                  <a href='index.php' class='active'>
                      <i class='bx bxs-dashboard icon' ></i> Dashboard
                  </a>
              </li>

          
              <li>
                  <a href='#'>
                      <i class='bx bx-columns icon' ></i> 
                      Category
                      <i class='bx bx-chevron-right icon-right' ></i>
                  </a>
                  <ul class='side-dropdown'>
                      <li><a href='add-category.php'>Add Category</a></li>
                      <li><a href='category-list.php'>Category List</a></li>
                  </ul>
              </li>";

              echo "<li>
              <a href='#'>
                  <i class='bx bx-columns icon' ></i> 
                 Sub Category
                  <i class='bx bx-chevron-right icon-right' ></i>
              </a>
              <ul class='side-dropdown'>
                  <li><a href='add-subcategory.php'>Add Sub Category</a></li>
                  <li><a href='sub-category-list.php'>Sub Category List</a></li>
              </ul>
          </li>";

          echo "<li>
              <a href='#'>
              <i class='bx bxs-widget icon' ></i> 
                    Product 
                  <i class='bx bx-chevron-right icon-right' ></i>
              </a>
              <ul class='side-dropdown'>
                  <li><a href='add-product.php'>Add Product</a></li>
                  <li><a href='product-list.php'>Product List</a></li>
              </ul>
          </li>";



          echo "<li>
          <a href='feedback.php' class='active'>
              <i class='bx bxs-dashboard icon' ></i> Feedback
          </a>
      </li>";

    //           echo "<li>
    //               <a href='blank-pages.html'>
    //                   <i class='bx bxs-meh-blank icon'></i> 
    //                   Blank Page
    //               </a>
    //           </li>

    //           <li>
    //               <a href='#'>
    //                   <i class='fa fa-th icon' ></i> 
    //                   Bootstrap 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='bootstrap-alert.html'>Alert</a></li>
    //                   <li><a href='bootstrap-badge.html'>Badge</a></li>
    //                   <li><a href='bootstrap-breadcrumb.html'>Breadcrumb</a></li>
    //                   <li><a href='bootstrap-buttons.html'>Buttons</a></li>
    //                   <li><a href='bootstrap-card.html'>Card</a></li>
    //                   <li><a href='bootstrap-carousel.html'>Carousel</a></li>
    //                   <li><a href='bootstrap-dropdown.html'>Dropdown</a></li>
    //                   <li><a href='bootstrap-list-group.html'>List Group</a></li>
    //                   <li><a href='bootstrap-modal.html'>Modal</a></li>
    //                   <li><a href='bootstrap-nav.html'>Navs</a></li>
    //                   <li><a href='bootstrap-pagination.html'>Pagination</a></li>
    //                   <li><a href='bootstrap-progress.html'>Progress</a></li>
    //                   <li><a href='bootstrap-spinner.html'>Spinner</a></li>
    //               </ul>
    //           </li>

    //           <li class='divider' data-text='Atrana'>Atrana</li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bx-columns icon' ></i> 
    //                   Components 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='component-avatar.html'>Avatar</a></li>
    //                   <li><a href='component-toastify.html'>Toastify</a></li>
    //                   <li><a href='component-sweet-alert.html'>Sweet Alert</a></li>
    //                   <li><a href='component-hero.html'>Hero</a></li>
    //               </ul>
    //           </li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bxs-notepad icon' ></i> 
    //                   Forms 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='forms-editor.html'>Editor</a></li>
    //                   <li><a href='forms-validation.html'>Validation</a></li>
    //                   <li><a href='forms-checkbox.html'>Checkbox</a></li>
    //                   <li><a href='forms-radio.html'>Radio</a></li>
    //               </ul>
    //           </li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bxs-widget icon' ></i> 
    //                   Widgets 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='widgets-chatboxs.html'>ChatBox</a></li>
    //                   <li><a href='widgets-email.html'>Emails</a></li>
    //                   <li><a href='widgets-pricing.html'>Pricing</a></li>
    //               </ul>
    //           </li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bxs-bar-chart-alt-2 icon' ></i> 
    //                   Charts 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='chart-chartjs.html'>ChartJS</a></li>
    //                   <li><a href='chart-apexcharts.html'>Apexcharts</a></li>
    //               </ul>
    //           </li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bxs-cloud-rain icon' ></i> 
    //                   Icons 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='icons-fontawesome.html'>Fontawesome</a></li>
    //                   <li><a href='icons-boostrap.html'>Bootstrap Icons</a></li>
    //               </ul>
    //           </li>

              
    //           <li class='divider' data-text='Pages'>Pages</li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bxs-user icon' ></i> 
    //                   Auth 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='auth-login.html'>Login</a></li>
    //                   <li><a href='auth-register.html'>Register</a></li>
    //                   <li><a href='auth-forgot-password.html'>Forgot Password</a></li>
    //                   <li><a href='auth-reset-password.html'>Reset Password</a></li>
    //               </ul>
    //           </li>

    //           <li>
    //               <a href='#'>
    //                   <i class='bx bxs-error icon' ></i> 
    //                   Errors 
    //                   <i class='bx bx-chevron-right icon-right' ></i>
    //               </a>
    //               <ul class='side-dropdown'>
    //                   <li><a href='errors-403.html'>403</a></li>
    //                   <li><a href='errors-404.html'>404</a></li>
    //                   <li><a href='errors-500.html'>500</a></li>
    //                   <li><a href='errors-503.html'>503</a></li>
    //               </ul>
    //           </li>


    //           <li>
    //               <a href='credits.html'><i class='fa fa-pencil-ruler icon' ></i> 
    //                   Credits
    //               </a>
    //           </li>

    //       </ul>

    //       <div class='ads'>
    //           <div class='wrapper'>
    //               <div class='help-icon'><i class='fa fa-circle-question fa-3x'></i></div>
    //               <p>Need Help with <strong>Atrana</strong>?</p>
    //               <a href='docs/' class='btn-upgrade'>Documentation</a>
    //            </div>
    //       </div>
    //   </div>";

echo "
     </div> 
   </div>
  </div>";

?>