<template>
  <div class="container sign-in">
    <h1>Авторизация</h1>
    <div class="row">
      <div class="col-md-5">
        <form @submit="signIn">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" v-model="email">
            <div class="error">{{errors.email}}</div>
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" v-model="password">
            <div class="error">{{errors.password}}</div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary">Войти</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
  import User from '@/components/user/user'
  import Axios from "axios";
  export default {
    name: "SignIn",
    data() {
      return {
        email: '',
        password: '',
        errors: {}
      }
    },
    methods: {
      signIn(e) {
        if (this.validate()) {
          const instance = Axios.create({
            baseURL: 'http://localhost:1199/v1'
          });

          instance.post('/user/login', {
            email: this.email,
            password: this.password
          }).then((response) => {
            console.log(response.data)
          })
        }
        e.preventDefault()
      },
      validate() {
        this.errors = {}

        if (this.email.trim().length === 0) {
          this.errors.email = 'Заполните Email.'
        }

        if (this.password.trim().length === 0) {
          this.errors.password = 'Заполните Пароль.'
        }

        return Object.keys(this.errors).length === 0
      }
    }
  }
</script>
