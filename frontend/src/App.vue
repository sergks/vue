<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top dark">
        <div class="container">
          <router-link class="navbar-brand" v-bind:to="{name: 'Home'}">MyShop</router-link>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <router-link class="nav-link" v-bind:to="{name: 'Catalog'}">Каталог</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" v-bind:to="{name: 'Delivery'}">Доставка и оплата</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" v-bind:to="{name: 'Contact'}">Контакты</router-link>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <router-link class="nav-link" v-bind:to="{name: 'SignIn'}">Войти</router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main role="main">
      <router-view/>
    </main>

    <footer class="container">
      <hr class="featurette-divider">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2020 BSTU. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </div>
</template>
