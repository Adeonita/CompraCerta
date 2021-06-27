async function login() {
    let loginData = {
        email: document.getElementById("emailInput").value,
        password: document.getElementById("passwordUser").value,
    }
    let logged = await postLogin(loginData);
    if (logged) {
        saveUser(logged);
    }
    window.location.href = '/';

}

function postLogin(loginData) {
    return res = $.post("http://localhost/login", loginData)
        .done(response => {
            if (response.name) {
                return user = {
                    name: response.name,
                    user_type: response.type,
                    user_id: response.user_id,
                    department_id: response.department_id
                };
            } else {
                alert("usuário não encontrado");
                return false;
            }
        });

}


$('#login-post').on('submit', e => {
    login();
    e.preventDefault();
})

function saveUser(userData) {
    localStorage.setItem("userId", userData.user_id);
    localStorage.setItem("userName", userData.name);
    localStorage.setItem("departmentId", userData.department_id);
}
