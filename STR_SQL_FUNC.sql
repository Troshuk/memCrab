integer ASCII(str string) -- возвращает целое значение — ASCII-код первого левого символа строки str.
SELECT ASCII ('t');
Результат: 116

integer ORD(str string) -- определяет ASCII- код символов, но может обрабатывать также многобайтовые символы
SELECT ORD ('test');
Результат: 116

string CHAR(int integer, ...) -- Функция CHAR возвращает строку символов по их ASCII-кодам. Если среди значений встречается значение NULL, то оно пропускается.
SELECT CHAR ( 116, '101', 115, '116' );
Результат: 'test'

string CONCAT(str1 string, str2 string,...) -- Функция возвращает строку, созданную путем объединения аргументов. Можно указывать более двух аргументов
SELECT CONCAT ('Число пи', '=', 3.14);
Результат:  'Число пи=3.14'

string CONCAT_WS(separator string, str1 string, str2 string,...) -- Функция объединяет строки как и функция CONCAT, но вставляет между аргументами разделитель separator
SELECT CONCAT_WS (' ', 'Иванов', 'Иван', 'Иванович');
Результат: 'Иванов Иван Иванович'

string LPAD(str string, len integer, padstr string) -- Функция LPAD возвращает строку str дополненную слева строкой padstr до длины len
SELECT LPAD ('test', 10, '.');
Результат: ......test
-- параметр len, который ограничивает количество выводимых символов
SELECT LPAD ('test', 3, '.');
Результат: tes

string RPAD(str string, len integer, padstr string) --  с правой стороны
SELECT RPAD ('test', 10, '.');
Результат: test......

integer LENGTH(str string) -- Функция возвращает целое число равное количеству символов в строке str.
SELECT LENGTH ('test');
Результат: 4

integer CHAR_LENGTH(str string) -- Функция также возвращает длину строки str и поддерживает многобайтовые символы.
SELECT CHAR_LENGTH ('тест');
Результат: 4

integer POSITION(substr string IN str string) -- Возвращает номер позиции первого вхождения подстроки substr в строке str и возвращает 0 если подстрока не найдена
SELECT POSITION ('cd' IN 'abcdcde');
Результат: 3

integer LOCATE(substr string, str string, pos integer) -- Возвращает позицию первого вхождения подстроки substr в строке str, начиная с позиции pos. Если параметр pos не задан, то поиск осуществляется с начала строки
SELECT LOCATE ('cd', 'abcdcdde', 5);
Результат: 5

integer INSTR(str string, substr string) -- Единственное отличие от функций POSITION и LOCATE то, что аргументы поменяны местами.

string LEFT(str string, len integer) -- Функция LEFT возвращает len первых символов из строки str
SELECT LEFT ('Москва', 3);
Результат: Мос

string RIGHT(str string, len integer) -- RIGHT возвращает len последних символов из строки str
SELECT RIGHT ('Москва', 3);
Результат: ква

string SUBSTRING(str string, pos integer, len integer) -- получить подстроку строки str длиною len символов с позиции pos
string MID(str string, pos integer, len integer)
SELECT SUBSTRING ('г. Москва — столица России', 4, 6);
Результат: Москва
SELECT SUBSTRING ('г. Москва — столица России', 4);
Результат: Москва — столица России
SELECT SUBSTRING('Sakila', -5, 3);
Результат: 'aki'

string SUBSTRING_INDEX(str string, delim string, count integer) -- Функция возвращает подстроку строки str, полученную путем удаления символов, идущих после разделителя delim, находящимся в позиции count
SELECT SUBSTRING_INDEX ('www.mysql.ru', '.', 1);
Результат: www
SELECT SUBSTRING_INDEX ('www.mysql.ru', '.', 2);
Результат: www.mysql
SELECT SUBSTRING_INDEX ('www.mysql.ru', '.', -2);
Результат: mysql.ru

string LTRIM(str string) -- Удаляет с начала строки str пробелы и возвращает результат.
SELECT LTRIM ('   текст   ');
Результат: 'текст   '

string RTRIM(str string) -- Удаляет с конца строки str пробелы и возвращает результат.
SELECT RTRIM ('   текст   ');
Результат: '  текст'

string TRIM([[BOTH | LEADING | TRAILING] [remstr] string FROM] str string) -- позволяет сразу удалять пробелы из начала и из конца строки
SELECT TRIM ('   текст   ');
Результат: 'текст'
	-- С помощью пара метра remstr можно задавать символы или подстроки, которые будут удаляться из начала и конца строки. С помощью управляющих параметров BOTH, LEADING, TRAILING можно задавать откуда будут удаляться символы
	*BOTH — удаляет подстроку remstr с начала и с конца строки;
	SELECT TRIM (BOTH 'а' FROM 'текст');
	Результат: 'текст'

	*LEADING — удаляет remstr с начала строки;
	SELECT TRIM (LEADING 'а' FROM 'текстааа');
	Результат: 'текстааа'

	*TRAILING — удаляет remstr с конца строки.
	SELECT TRIM (TRAILING 'а' FROM 'ааатекст');
	Результат: 'ааатекст'

string SPACE(n integer) -- Возвращает строку, которая состоит из n пробелов.

string REPLACE(str string, from_str string, to_str string) -- Функция заменяет в строке str все подстроки from_str на to_str и возвращает результат
SELECT REPLACE ( 'замена подстроки', 'подстроки', 'текста' )
Результат: 'замена текста'

string REPEAT(str string, count integer) -- Функция возвращает строку, которая состоит из count повторений строки str
SELECT REPEAT ('w', 3);
Результат: 'www'

string REVERSE(str string) -- Переставляет в строке str все символы с последнего на первый и возвращает результат
SELECT REVERSE ('текст');
Результат: 'тскет'

string INSERT(str string, pos integer, len integer, newstr string) -- Возвращает строку полученную в результате вставки в строку str подстроки newstr с позиции pos. len указывает сколько символов будет удалено из строки str, начиная с позиции pos
SELECT INSERT ('text', 2, 5, 'MySQL');
Результат: 'tMySQL'

SELECT INSERT ('text', 2, 0, 'MySQL');
Результат: 'tMySQLext'

SELECT INSERT ('вставка текста', 2, 7, 'MySQL');
Результат: 'вMySQLтекста'

string LCASE(str string) 
string LOWER(str string) -- Обе функции заменяют в строке str заглавные буквы на прописные и возвращают результат
SELCET LOWER ('АБВГДеЖЗиКЛ');
Результат:'абвгдежзикл'

string UCASE(str string)
string UPPER (str string) -- Функции возвращают строку str, заменив все прописные символы на заглавные
SELECT UPPER ('Абвгдежз');
Результат: 'АБВГДЕЖЗ'

SELECT ELT(1, 'ej', 'Heja', 'hej', 'foo'); -- повертає N-ий елемент списку рядків
Результат: 'ej'
