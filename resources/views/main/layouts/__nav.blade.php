
    <!-- main Header Start -->
    <header class="main-header">
        <div class="header-sticky">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <!-- Logo Start -->
              <a class="navbar-brand" href="./">
                <img src="images/logo.svg" alt="Logo" />
              </a>
              <!-- Logo End -->
  
              <div class="nav-menu-wrapper" >
                <!--Menu Start-->
                    <!--Menu Start-->
                    <div class="collapse navbar-collapse main-menu" active >
                      <ul class="navbar-nav mr-auto" id="menu" active >

                        <li class="nav-items " >
                        <a class="nav-link" href="{{ url ('/')}}"> Home  </a>

                        <li class="nav-items ">
                        <a class="nav-link" href="{{ url ('/about')}}"> About Us </a>

                        <li class="nav-items ">
                        <a class="nav-link" href="{{ url ('/gallery')}}"> Gallery  </a>

                        <li class="nav-items ">
                        <a class="nav-link" href="{{ url ('/services')}}"> Services </a>

                        <li class="nav-items ">
                        <a class="nav-link" href="{{ url ('/contact')}}"> Contact </a>
                        
                        @if (!Auth::check())
                        <li class="nav-items ">
                        <a class="nav-link" href="{{ url ('/register')}}"> sign in </a>
                        @endif
                    </div>
                    <div class="navbar-toggle"></div>
                    <!--Menu End-->
                <!--Menu End-->
                <!--Get Free Quote btn Start-->
                @if (Auth::check())
                <div class="get-btn-wrap">   
                      
                  
                  <a class="nav-link" href="{{ url ('/dashboard')}}"> My Profile </a>
              </div>
              
                  
              @else
                  
              <div class="get-btn-wrap">   
                    
                
                  <a class="nav-link" href="{{ url ('/login')}}"> log in </a>
              </div>
               @endif
                <!--Get Free Quote btn Start-->
              </div>
            </div>
          </nav>
          <div class="responsive-menu"></div>
        </div>
      </header>
      <!-- main Header end -->