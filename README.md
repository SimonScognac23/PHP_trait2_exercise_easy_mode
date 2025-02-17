In this PHP script, I implemented a Calculator trait that encapsulates fundamental mathematical operations such as addition, subtraction, multiplication, division, and square root calculation. This allows me to reuse these operations in other classes without duplicating code.

Then, I created a Rettangolo (Rectangle) class that uses the Calculator trait. This class has two private properties:

base (width)
altezza (height)
These properties are initialized via the constructor. The class also defines three key methods to perform rectangle-related calculations:

getArea() → Computes the area of the rectangle by multiplying the base and height.
getPerimeter() → Calculates the perimeter by summing the base and height, then multiplying the result by 2.
getDiagonal() → Determines the diagonal using the Pythagorean theorem, by summing the squares of the base and height and then taking the square root of the result.
Finally, I instantiated a Rettangolo object with a base of 5 and a height of 2, and printed the area, perimeter, and diagonal.

This approach demonstrates code modularity, reusability through traits, and encapsulation, ensuring a clean and maintainable structure.


-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In questo script PHP, ho implementato un trait chiamato Calculator che racchiude operazioni matematiche fondamentali come addizione, sottrazione, moltiplicazione, divisione e calcolo della radice quadrata. Questo mi permette di riutilizzare il codice in altre classi senza duplicarlo.

Successivamente, ho creato una classe Rettangolo che usa il Calculator. Questa classe ha due proprietà private:

base (larghezza)
altezza
Queste proprietà vengono inizializzate tramite il costruttore. Ho poi definito tre metodi principali per i calcoli del rettangolo:

getArea() → Calcola l’area moltiplicando base e altezza.
getPerimeter() → Calcola il perimetro sommando base e altezza e moltiplicando il risultato per 2.
getDiagonal() → Determina la diagonale usando il teorema di Pitagora, sommando i quadrati della base e dell’altezza e facendo la radice quadrata del risultato.
Infine, ho creato un oggetto Rettangolo con base 5 e altezza 2, stampando la sua area, perimetro e diagonale.

Questo approccio dimostra modularità, riutilizzo del codice grazie ai trait e incapsulamento, garantendo una struttura chiara e manutenibile.
