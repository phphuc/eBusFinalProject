<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
<!--This is a button represent the menu when the users rezie the window-->    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<!--This is the link to homepage-->
      <a class="navbar-brand" href="index.html">Elexo</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--Dropdown menu here-->
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          Keyboards & Mice  <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Microsoft</a></li>
            <li><a href="#">Apple</a></li>
            <li><a href="#">Logitech</a></li>
            <li><a href="#">Asus</a></li>
            <li class="divider"></li>
            <li><a href="#">All Keyboard & Mice</a></li>
          </ul>
        </li>
      </ul>
<!--Search Bar and Login, Cart--> 
      <div class="navbar-right">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Elexo!</button>
        </form>

        <ul class="nav navbar-nav navbar-right list-inline">
          <li><a tabindex="0"   
                 data-toggle="popover" 
                 data-placement="bottom"
                 data-container="body"
                 title="Please enter your login credentials:" 
                 data-content="
                      <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                 ">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
               Login 
              <span class="caret"></span>
              </a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Checkout</a></li>
        </ul>
      </div>
      
    </div>
  </div>
</nav>
             