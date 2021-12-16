// Upload Items
async function upload(){
    let conn = await fetch("../apis/api-uploadCopy.php", {
      method : "POST",
      body : new FormData(document.querySelector("#upload_item"))
    })
    let response = await conn.json()
    console.log(response)
    if( conn.ok ){
       location.href = "../success/success.php"
     }else {
       alert(res['info'])
     }
  }

// validate email 
async function send_email(){
    let conn = await fetch("../email/api-sign-up.php", {
      method : "POST",
    //   body : new FormData(document.querySelector("#form_sign_up"))
    })
    let response = await conn.json()
    console.log(response)
    if( conn.ok ){
        // alert("email has been sent")
        location.href = "../success/success.php"
    //   location.href = "../update_profile/success.php"
     }else {
       alert(res['info'])
     }
  }

//password email
async function password_email(){
    let conn = await fetch("../email/api-password.php", {
      method : "POST",
    })
    let response = await conn.json()
    console.log(response)
    if( conn.ok ){
        // alert("email has been sent");
        location.href = "../success/success.php"
     }else {
       alert(res['info'])
     }
  }

//log in 
async function login(){
    const form = event.target.form
    console.log(form)
    let conn = await fetch("../apis/api-login.php", {
      method: "POST",
      body: new FormData(form)
    })
    let res = await conn.json()
    console.log(res)
    if(conn.ok ){
        location.href = "../home/home.php"
    }
  }

//sign up
async function sign_up(){
    let conn = await fetch("../apis/api-signup.php", {
      method : "POST",
      body : new FormData(document.querySelector("#sign_up"))
    })
    let response = await conn.json()
    console.log(response)
    if( conn.ok ){
      location.href = "../email/buttomEmail.php"
     }else {
       alert(res['info'])
     }
  }

// update items 
async function update(){
    let conn = await fetch("../apis/api-update-item.php", {
      method : "POST",
      body : new FormData(document.querySelector("#update_item"))
    })
    let response = await conn.json()
    console.log(response)
    if( conn.ok ){
       location.href = "../success/success.php"
     }else {
       alert(res['info'])
     }
  }

// transaction 
async function update(){
    const form = event.target.form
    let conn = await fetch("../apis/transaction-update.php", {
      method: "POST",
      body: new FormData(document.querySelector("#update_item"))
    })
    let res = await conn.json()
    console.log(res)
    if( conn.ok ){
       location.href = "../success/success.php"
    }else {
      alert(res['info'])
    }
  }

// update password
async function update_pass(){
    const form = event.target.form
    let conn = await fetch("../apis/api-update-password.php", {
      method: "POST",
      body: new FormData(document.querySelector("#update-password"))
    })
    let res = await conn.json()
    console.log(res)
    if( conn.ok ){
       location.href = "../success/success.php"
      console.log('worked')
    }else {
      alert(res['info'])
    }
  }