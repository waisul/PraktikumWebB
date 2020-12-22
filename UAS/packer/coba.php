<header>
    <div class="container">
      <div class="logo">SANCASH</div>

      <nav>
        <ul>
          <li><a href="#">Home</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <style media="screen">
  .container {
    width: 80%;
      margin: 0 auto;
  }

  header {
    background: #55d6aa;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.30);
  }

  header::after {
    content: '';
    display: table;
    clear: both;
  }

  .logo {
    float: left;
    padding: 10px 0;
  }

  nav {
    float: left;
  }

  nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  nav li {
    display: inline-block;
    margin-left: 70px;
    padding-top: 23px;

    position: relative;
  }

  nav a {
    color: #444;
    text-decoration: none;
    text-transform: uppercase;
  font-size: 14px;
}

nav a:hover {
  color: #000;
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #444;

  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 100%;
}
  </style>
