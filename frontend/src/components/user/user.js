/**
 * Работа с пользователем.
 */
export default {
    email: null,
    accessToken: null,
    isAuth() {
        let data = localStorage.getItem('user')

        if (data === null) {
            return false
        }

        data = JSON.parse(data)
        this.email = data.email
        this.accessToken = data.accessToken

        return true
    },
    login(data) {
        this.email = data.email
        this.accessToken = data.accessToken
        localStorage.setItem('user', JSON.stringify({
            email: this.email,
            accessToken: this.accessToken,
        }))
    },
    logout() {
        this.email = null
        this.accessToken = null
        localStorage.removeItem('user')
    }
}