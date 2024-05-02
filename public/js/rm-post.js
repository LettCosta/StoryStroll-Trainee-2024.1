function Excluir() {
    let text = "Tem certeza que deseja excluir a publicação?";
    if (confirm(text) == true) {
      text = "Excluido com sucesso";
      window.location.href ='#';
    } 
  }