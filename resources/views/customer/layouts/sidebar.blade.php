<div class="col-12 col-sm-3 admin-options">
          <div class="admin-user">
            <div class="container">
              <div class="row">
                <div class="col-5">
                  <a href="#"><img width="100%" src="/backend/assets/images/admin.png"></a>
                </div>
                <div class="col-7">
                  <h4>Alan D.</h4>
                  <p>$444 Juice Savings</p>
                </div> 
              </div>
            </div>
          </div>
          <div class="admin-nav">
            <ul>
              <li class="active"><a href="#">Balance Sheet</a><img src="/backend/assets/images/arrow.png"></li>
              <li><a href="#">Stats</a><img src="/backend/assets/images/arrow.png"></li>
              <li><a href="#">Friends</a><img src="/backend/assets/images/arrow.png"></li>
              <li><a href="#">Groups</a><img src="/backend/assets/images/arrow.png"></li>
              <li><a href="#">Contest</a><img src="/backend/assets/images/arrow.png"></li>
              <li><a href="#">1 OUTSTANDING $30</a></li>
              <li><a href="#">0 ACCEPTED</a></li>
              <li><a href="#">0 IN ACTION</a></li>
              <li><a href="#">ACCOUNT</a></li>
              <li>
                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
            <a href="#" class="invite-btn">Invite Your Friends</a>
          </div>
        </div>