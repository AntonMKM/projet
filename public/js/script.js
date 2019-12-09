function confirmation(id){
    var conf = confirm("êtes vous sûr de vouloir supprimer ces données ?");
    if(conf == true){
      document.location.replace('index.php?action=delete&id=' + id);
    }
  }

  function modif(id){
    loginTab = document.getElementById('login'+id);
    emailTab = document.getElementById('email'+id);
    passTab = document.getElementById('pass'+id);
      
    let login = loginTab.innerHTML;
    let email = emailTab.innerHTML;
    let pass = passTab.innerHTML;
      
    loginTab.innerHTML = "<input required type='text' name='login' value='" + login +"'>";
    emailTab.innerHTML = "<input required type='text' name='email' value='" + email +"'>";
    passTab.innerHTML = "<input type='text' name='pass' value='" + pass +"'>";

    document.getElementById('bouton'+id).innerHTML = "<input type='submit' class='btn btn-success' value='update'>";
    document.getElementById('formModif').action = "index.php?action=update&id="+id;     
  
  
    selectTab =  document.querySelectorAll('tr:not(#infos'+id+')');
    for(i=0;i<selectTab.length;i++){
      selectTab[i].addEventListener("click",undoUpdate);
    }
  
    buttons = document.querySelectorAll('.boutonModif:not(#bouton'+id+')');
    for(i=0;i<buttons.length;i++){
      idModif = buttons[i].value;
      buttons[i].onclick+= " undoUpdate()";
    }
  }