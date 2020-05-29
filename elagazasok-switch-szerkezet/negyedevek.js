let honapNev = "Október"
let negyedEv
 
switch (honapNev) {
 case "Január"    :
 case "Február"   :
 case "Március"   :
   negyedEv = 1
   break
 case "Április"   :
 case "Május"     :
 case "Június"    :
   negyedEv = 2
   break 
 case "Július"    :
 case "Augusztus" :
 case "Szeptember":
   negyedEv = 3
   break 
 case "Október"   :
 case "November"  :
 case "December"  :
   negyedEv = 4
   break
 default:
   negyedEv = -1
}
 
console.log(honapNev + " => " + negyedEv + ". negyedev")
