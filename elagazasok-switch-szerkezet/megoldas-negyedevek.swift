let honapNev = "Október"
var negyedEv = 0
 
switch (honapNev) {
 case "Január" ,"Február","Március":
   negyedEv = 1
 case "Április", "Május", "Június":
   negyedEv = 2
 case "Július", "Augusztus", "Szeptember":
   negyedEv = 3
 case "Október", "November", "December":
   negyedEv = 4
 default:
   negyedEv = -1
}
print(honapNev + " => " + String(negyedEv) + ". negyedev")
 
