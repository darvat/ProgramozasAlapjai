let honapNev = "Október"
var negyedEv = 0
 
switch (honapNev) {
  case "Január": fallthrough 
  case "Február": fallthrough
  case "Március":
    negyedEv = 1
  case "Április": fallthrough 
  case "Május": fallthrough 
  case "Június":
    negyedEv = 2
  case "Július": fallthrough 
  case "Augusztus": fallthrough 
  case "Szeptember":
    negyedEv = 3
  case "Október": fallthrough 
  case "November": fallthrough 
  case "December":
    negyedEv = 4
  default:
    negyedEv = -1
}
print(honapNev + " => " + String(negyedEv) + ". negyedev")
