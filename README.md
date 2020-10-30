# Technical Assessment for Web Developer
### SHELL
1.	Create a single line script that returns the number of httpd processes that are running on the current machine 
`ps -e | grep httpd | grep -cv grep`
2.	From the current folder (/tmp), provide some bash commands that will rename all the *.txt files in mig33/inner_folder/ to *.dat 
`for file in ./mig33/inner.folder/*.txt; do mv "$file" "${file%.txt}.dat"; done`

### SQL
1)	Provide a mysql select statement to return the following resultset structure:
day; num_pos_scores; num_neg_scores 
`SELECT DAYNAME(date) AS DAY, COUNT(CASE WHEN score >0 THEN score END) AS num_pos_scores, COUNT(CASE WHEN score <0 THEN score END) AS num_neg_scores FROM 'assessments' GROUP BY DAY`
2)	Provide a mysql select statement that returns all the days between January 1st, 2011 and June 30th, 2011, both days inclusive, where there were no negative scores. 
`SELECT * FROM 'assessments' WHERE 'date' BETWEEN '2011-01-01 00:00:00' AND '2011-06-30 23:59:59' AND `score` > 0`

### PARALLEL AND CONCURRENCY
Secara singkat parallel dan concurrency adalah ketika sistem melakukan banyak hal secara bersamaan.  Parallel dan Concurrency sebenarnya sudah sering kita lakukan, dengan melakukan suatu hal secara bersamaan kita sudah menerapkan kedua konsep tersebut. 
Nah, apa yang membedakan kedua konsep tersebut? Saya analogikan konsep tersebut kedalam sebuah kasus. Diceritakan ada karyawan yang harus melakukan 2 tugas untuk 1 hari, yaitu :
1.	Membuat passport.
2.	Membuat laporan untuk presentasi di kantor.

Untuk membuat passport karyawan tersebut harus mengantre, melakukan wawancara, foto, pembayaran hingga pembuatan passport selesai. Sedangkan laporan harus diselesaikan hari itu untuk dipresentasikan. 
Pada konsep concurrency, karyawan tersebut akan membawa laptop ke kantor imigrasi. Selagi mengantre, karyawan tersebut akan membuat laporan. Kedua tugas dapat dilakukan bersamaan. Namun pada saat nomer antrean dipanggil, karyawan harus menunda mengerjakan laporan dan kembali ke proses pembuatan passport. Ketika mengatri Kembali untuk foto, karyawan dapat melanjutkan laporannya kembali. 
![image](https://user-images.githubusercontent.com/73600505/97726754-8af70700-1b0a-11eb-8f0b-d933282eb5e6.png)

Sedangkan pada konsep parallel, karyawan tersebut cerdas dengan meminta bantuan pada rekan kerja untuk mengerjakan laporan. Sehingga dia bisa fokus untuk mengurus pembuatan passport tanpa adanya interupsi. Ketika laporan sudah diselesaikan karyawan dapat mengeceknya kembali. 

![image](https://user-images.githubusercontent.com/73600505/97726881-aa8e2f80-1b0a-11eb-9122-e0b1f8d59082.png)
