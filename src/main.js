function filter() {
  var input, filter, table, tr, td, i, txtValue, txtFQDN, txtIP, FQDN, IP;
  input = document.getElementById("myInput");
  if (input.value.length < 3 && input.value.length > 0){
    return;
  }
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    FQDN = tr[i].getElementsByTagName("td")[0];
    IP = tr[i].getElementsByTagName("td")[1];
    CNAME = tr[i].getElementsByTagName("td")[2];
    if (FQDN || IP) {
      txtFQDN = FQDN.textContent || FQDN.innerText;
      txtIP = IP.textContent || IP.innerText;
      txtCNAME = CNAME.textContent || CNAME.innerText;
      txtValue = ''.concat(' ', txtFQDN).concat(' ', txtIP).concat(' ', txtCNAME);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function confirmar(fqdn) {
  return confirm("¿Esta seguro que desea eliminar" + fqdn)
}
