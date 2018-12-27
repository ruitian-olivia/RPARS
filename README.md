# RPARS Database
Our RPARS（Ribosomal proteins of antibiotic resistant strains）provides you with the resistance gene and strains ribosomal protein. As a user, you can glance over the strain which is antibiotic, download the fasta file of protein sequence, and even get the resisstance mechanism of the strain.

#### Resistance Gene
In this section, you can look through the resistance gene ID, gene type strain name, antibiotic name and the description of the resistance gene.

#### Ribosomal Protein
In this section, you can look through the entry ID, protein name, coding gene name, strain name, amino acid sequence, sequence length and the fasta link to provide the approach to download.

#### About Searching
We provide the function of searching with each module can have up to five limitations.
In each limit statement, you can choose:
- Connection relationships<br>
**AND** for all of the statements should be met <br>
**OR** for at last one of the statements should be met<br>
**NOT** means AND NOT which means this statement should not be met(the use of AND is the same)<br>

To emphasize that the first selection can only be NULL or NOT because of the absence of the previous one.

- Property 
In this box, you can choose the property that you are want to restrict. 

- Restricted content
Input the word or phrase you want to search

#### How to make more than one limitation?
The most common input:<br>
1)	To make multiple throttling conditions that are met at the same time, you can simply use ‘AND’ to contect
2)	To make the search of only one of all conditions needs to be met, you can use ‘OR’ to contect
3)	If the one of the command A and B should be met, and one of the command (A and B)、C should be met, you can input ‘A AND B OR C’ which means ‘(A AND B) OR C’, the command of AND will be used at first
4)	If one of the command A and B should be met, and the command C must be met, you can input like ‘A AND C OR B AND C’ which means ‘(A AND C) OR (B AND C)’

#### Our Team
- Ruitian Gao
- Tongwei Dai
- Tiantian Cheng
- Wen Wen
