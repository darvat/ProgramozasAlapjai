let honapNev = "Október"
let honap
 
switch (honapNev) {
 case "Január":
   honap = 1; break;
 case "Február":
   honap = 2; break;
 case "Március":
   honap = 3; break;
 case "Április":
   honap = 4; break;
 case "Május":
   honap = 5; break;
 case "Június":
   honap = 6; break;
 case "Július":
   honap = 7; break;
 case "Augusztus":
   honap = 8; break;
 case "Szeptember":
   honap = 9; break;
 case "Október":
   honap = 10; break;
 case "November":
   honap = 11; break;
 case "December":
   honap = 12; break;
 default:
   honap = -1
}
 
console.log(honapNev + " = " + honap)
