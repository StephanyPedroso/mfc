function handleLogin(event){
  event.preventDefaut()

  const username = document.ElementById('input username').value
  const password = document.getElementById('input password').value

  console.log(`Username: ${username}`)
  console.log(`Password: ${password}`)

  alert(`Login with: ${username} \n Password: ${password}`)
  
}

document.getElementById('login-form').addEventListener('submit' , handleLogin)