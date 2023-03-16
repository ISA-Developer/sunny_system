const CSRF = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const formLogin = document.querySelector('#login_form')
const username_email = document.querySelector('#username_email')
const password = document.querySelector('#password')

document.addEventListener('DOMContentLoaded', async (event) => {
    formLogin.addEventListener('submit', submit)
    username_email.addEventListener("input", setState)
    password.addEventListener("input", setState)
})

function submit(e) {
    e.preventDefault()
    login()
}

async function login() {
    showLoadingButton(true)

    try {
        const req = await axios.post('/login/json', {
            username_email: username_email.value,
            password: password.value
        }, {
            headers: {
                "X-CSRF-TOKEN": CSRF
            }
        })
        const res = req.data
        if(!res.success) {
            throw res.errors
        }

        window.location = '/'
    } catch (error) {
        const errorResponse = error.response ? error.response.data : null
        setErrors(errorResponse ? errorResponse.errors : null)
        showLoadingButton(false)
    } finally {}
}

function showLoadingButton(isShow = true) {
    const submit = document.querySelector('button[type="submit"]')
    if(isShow) {
        submit.disabled = true
        submit.children[0].innerText = ''
        submit.children[1].classList.remove('indicator-progress') 
    } else {
        submit.disabled = false
        submit.children[0].innerText = 'LOGIN'
        submit.children[1].classList.add('indicator-progress') 
    }
}

function setState(el) {
    const elem = el.target
    const value = elem.value
    const isError = elem.classList.contains('is-invalid')
    if(isError && value.trim().length > 0) {
        elem.classList.remove('is-invalid')
    }
}

function setError(el, error) {
    console.log({el, error})
    
    if(error) {
        el.classList.add('is-invalid')
    }

    el.nextElementSibling.innerText = error ? Array.isArray(error) ? error.join(', ') : error : ''
}

function setErrors(errors) {
    setError(username_email, errors ? errors.username || errors.email || errors.username_email : null)
    setError(password, errors ? errors.password : null)
}