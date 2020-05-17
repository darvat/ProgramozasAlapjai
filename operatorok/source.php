<?php

//egysoros megjegyzes

/* 
  tobb
  soros
  megjegyzes
*/
print("\n--- összeadás, kivonás, szorzás, osztás ---\n");

$a = 19;
$b = 9;
print("\na = $a, b = $b\n");

$c = $a + $b;
print("a + b = " . $c . "\n");

$d = $a - $b;
print("a - b = " . $d . "\n");

$e = $a * $b;
print("a * b = " . $e . "\n");

$f = $a / $b;
print("a / b = " . $f . "\n");

print("\n--- maradék számítására szolgáló operátor, modulo ---\n");

$g = 12;
$h = 5;
print("\ng = " . $g . ", h = " . $h . "\n");

$i = $g % $h;
print("g % h = " . $i . "\n");

print("\n--- prefix inkrementálás / dekrementálás ---\n");

/* ez a normál értéknövelés*/
$aa = 1;
$aa = $aa + 1;

$aa = 10;
print("\naa = " . $aa . "\n");

/* ez a prefixes */
$bb = ++$aa;  // ugyanaz mint $bb = $aa + 1
print("++aa = " . $bb . "\n");

$cc = --$aa; // ugyanaz mint $bb = $aa - 1
print("--aa = " . $cc . "\n");

print("\n--- postfix inkrementálás / dekrementálás --- \n");

$dd = 10;
print("\ndd = " . $dd . "\n");

$ee = $dd++;
/* 
  ugyanaz mint:
  $ee = $dd;
  $dd = $dd + 1;
*/   
print("\ndd = " . $dd . "\n");
print("ee = " . $ee . "\n");

$ff = $dd--;
/* 
  ugyanaz mint:
  $ee = $dd;
  $dd = $dd - 1;
*/
print("\ndd = " . $dd . "\n");
print("ff = " . $ff . "\n");

print("\n--- összetett hozzárendelés operátor (compound assignment)---\n"); 

$ll = 12;
print("\nll  = " . $ll . "\n");

$ll += 15; // ugyanaz, mint ha ezt írtam volna $ll = $ll + 15
print("ll += 15 = " . $ll . "\n");

$ll -= 10; // ugyanaz, mint ha ezt írtam volna $ll = $ll - 10
print("ll -= 10 = " . $ll . "\n");

$ll *= 4; // ugyanaz, mint ha ezt írtam volna $ll = $ll * 4
print("ll *= 4 = " . $ll . "\n");

$ll /= 2; // ugyanaz, mint ha ezt írtam volna $ll = $ll / 2
print("ll /= 2 = " . $ll . "\n");

print("\n--- összehasonlító operátorok --- \n"); 

print("\nll=$ll, aa=$aa, bb=$bb, cc=$cc, a=$a\n");
print("ll == 0  : "); 
var_dump($ll == 0);   // ll egyenlő 0?

print("ll <= aa : "); 
var_dump($ll <= $aa); // ll kisebb egyenlő mint aa?

print("ll >= bb : "); 
var_dump($ll >= $bb); // ll nagyobb egyenlő mint bb?

print("ll < cc  : "); 
var_dump($ll < $cc); // ll kisebb mint cc?

print("ll > a   : "); 
var_dump($ll > $a); // ll nagyobb mint a?

print("ll != 99 : "); 
var_dump($ll != 99); // ll nem egyenlő 99-cel?


print("\n--- hármas feltételes operátor (ternary conditional) ---\n");

$j = ($aa == 12 ? 100 : -1); // ha aa egyenlő 12-vel, akkor 100, egyébként -1-t rendelünk j-hez 
print("\naa = $aa, j = $j\n");

print("\n--- logikai operátorok ---\n");

$igaz = true;
$hamis = 3 == 8; // logikai kifejezés: 3 egyenlő 8-cal? nem, false lesz a hamis változó
var_dump($igaz,$hamis);

print("\nNEM igaz: "); 
var_dump(! $igaz); // negálás, a logikai változó ellentétes értéke

print("\nlogikai VAGY: logikai VAGY mindig igaz, kivéve ha mindkettő hamis: \n"); 
var_dump( $igaz  || $igaz);
var_dump( $igaz  || $hamis);
var_dump( $hamis || $igaz);
var_dump( $hamis || $hamis);

print("\nlogikai ÉS: logikai ÉS, mindig hamis, kivéve ha mindkettő igaz: \n"); 
var_dump( $igaz  && $igaz);
var_dump( $igaz  && $hamis);
var_dump( $hamis && $igaz);
var_dump( $hamis && $hamis); 
