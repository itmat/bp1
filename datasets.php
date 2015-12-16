<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="Benchmark Analysis of Algorithms for Determining and Quantifying Full-length mRNA Splice Forms from RNA-Seq Data" />

<meta name="keywords" content="RNA-Seq" />

<meta name="author" content="Katharina Hayer" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<title>BP1</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69093404-1', 'auto');
  ga('send', 'pageview');

</script>

</head>



<body>


<div id="wrapper">

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


<div id="content">

<h2>Datasets</h2>

<h3>Genomes and Annotation</h3>
<h4>Download: <br>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria.tar.bz2">http://bp1.s3.amazonaws.com/malaria.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria.tar.bz2.md5sum">http://bp1.s3.amazonaws.com/malaria.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria.tar.bz2 <td> 6.4</tr>
<tr><td>genome_sequence_pfal.fa <td> 22.7</tr>
<tr><td>simulator_config_featurequantifications_pfal <td> 1.5</tr>
<tr><td>simulator_config_geneinfo_pfal_GTF <td> 1.4</tr>
<tr><td>simulator_config_geneinfo_pfal_BED.bed <td> 0.4</tr>
</table>
</span>
</div>
<center>

<h3>Dataset Test 1 (T1)</h3>

<p>
SOMETHING ABOUT T1
</p>
<h4>Download: <br>
<div id="under-element">
<center>
<a href="http://bp2.s3.amazonaws.com/hayer1_T1.tar.bz2">hayer1_T1.tar.bz2</a>
  (<a href="http://bp2.s3.amazonaws.com/hayer1_T1.tar.bz2.md5sum">hayer1_T1.tar.bz2.md5sum</a>) 
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
<tr><td>simulated_reads_test1.forward.fa<td>  5,520.71</tr>
<tr><td>simulated_reads_test1.reverse.fa<td>  5,198.00</tr>
<tr><td>simulated_reads_junctions-crossed_test1.txt<td> 1,234.61</tr>
<tr><td>fraglenhisto_test1.txt<td>  0.00</tr>
<tr><td>simulated_reads2genes_test1.txt<td> 1,188.07</tr>
<tr><td>simulated_reads_test1.log<td> 0.00</tr>
<tr><td>true_alignment.bam <td> 1,998.46</tr>
<tr><td>true_alignment.bam.bai <td> 2.67</tr>
<tr><td>tophat_without_gene_models.bam.bai<td>  3.49</tr>
<tr><td>tophat_with_gene_models.bam<td> 1,941.81</tr>
<tr><td>tophat_without_gene_models.bam <td> 1,893.04</tr>
<tr><td>tophat_with_gene_models.bam.bai<td> 2.88</tr>
<tr><td>star_without_gene_models.bam <td> 2,031.73</tr>
<tr><td>star_without_gene_models.bam.bai <td> 3.05</tr>
<tr><td>star_with_gene_models.bam <td>2,030.98</tr>
<tr><td>star_with_gene_models.bam.bai <td>3.05</tr>
</table>
</span>
</div>
<center>
<a href="http://bp2.s3.amazonaws.com/simulator_config_geneinfo_test1_PLUS_MINUS.gtf">gene_models.gtf</a>
</center>
</h4>


<h3>ENSEMBL Perfect (EP) and ENSEMBL Realistic (ER)</h3>

<p>
Two additional simulated data sets were generated to assess the effect of polymorphisms and sequencing artifacts.  Data set EP (ENSEMBL Perfect) was generated with the same parameters as T1, except the full set of 93,778 unmodified ENSEMBL transcript models was used.  Data set ER (ENSEMBL Realistic) was generated with the same parameters except for the following changes, chosen to mimic real data: basewise error=0,5%, substitution frequency=0.1%, indel frequency=0.05%, intron frequency=30%.  These are fairly low polymorphism rates that would be expected if comparing human sequencing data to the human reference genome.  In reality the polymorphism rates in other organisms will be much higher.  We chose these parameters in order to attain reasonable lower bounds on algorithm accuracy in practice, where human/human comparisons are currently among the least polymorphic of all vertebrates.  Intron frequency of 30% may seem high at first, but it is typical.  However, in spite of comprising nearly a third of the reads, since introns are so much larger than exons the majority of intron signal results in very low coverage.  Two-thirds of all transcripts are expressed above zero, with levels of expressed transcripts given by an exponential distribution.  Short genes will be underrepresented because of the fragment length distribution so we removed all genes under 200 bases.
</p>
<h4>Download: <br> 
<center>
<div id="under-element">
<a href="http://bp2.s3.amazonaws.com/hayer1_EP.tar.bz2">hayer1_EP.tar.bz2</a>
  (<a href="http://bp2.s3.amazonaws.com/hayer1_EP.tar.bz2.md5sum">hayer1_EP.tar.bz2.md5sum</a>),<br> 
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_EP.tar.bz2 <td>  17,870.41</tr>
<tr><td>simulated_reads_EP.cig <td> 16,487.73</tr>
<tr><td>simulated_reads_EP.forward.fa<td> 5,520.71</tr>
<tr><td>simulated_reads_EP.reverse.fa<td> 5,520.71</tr>
<tr><td>simulator_config_featurequantifications_ensembl-mm9_EP<td>  53.52</tr>
<tr><td>simulated_reads_EP.log<td>  0.00</tr>
<tr><td>true_alignment.bam<td>  1,966.32</tr>
<tr><td>simulator_config_geneinfo_ensembl-mm9 <td>14.96</tr>
<tr><td>fraglenhisto_EP.txt<td> 0.00</tr>
<tr><td>simulated_reads_junctions-crossed_EP.bed <td> 13.87</tr>
<tr><td>simulated_reads2genes_EP.txt <td> 1,126.62</tr>
<tr><td>true_alignment.bam.bai <td> 3.00</tr>
<tr><td>tophat_without_gene_models.bam<td>  2,047.93</tr>
<tr><td>tophat_without_gene_models.bam.bai<td>  4.15</tr>
<tr><td>tophat_with_gene_models.bam<td> 1,926.33</tr>
<tr><td>tophat_with_gene_models.bam.bai<td> 3.12</tr>
<tr><td>star_without_gene_models.bam <td> 1,992.92</tr>
<tr><td>star_without_gene_models.bam.bai <td> 3.21</tr>
<tr><td>star_with_gene_models.bam <td>1,992.92</tr>
<tr><td>star_with_gene_models.bam.bai <td>3.21</tr>
</table>
</span>
</div>
<div id="under-element">
   <a href="http://bp2.s3.amazonaws.com/hayer1_ER.tar.bz2">hayer1_ER.tar.bz2</a>
  (<a href="http://bp2.s3.amazonaws.com/hayer1_ER.tar.bz2.md5sum">hayer1_ER.tar.bz2.md5sum</a>) 
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_ER.tar.bz2<td> 23,674.97</tr>
<tr><td>simulated_reads_ER.cig<td>  16,148.54 </tr>
<tr><td>fraglenhisto_ER.txt<td> 0.00 </tr>
<tr><td>simulated_reads_ER.log<td>  0.00 </tr>
<tr><td>simulated_reads_indels_ER.txt<td> 1.81 </tr>
<tr><td>simulated_reads_substitutions_ER.txt<td>  4.18 </tr>
<tr><td>simulator_config_geneinfo_ensembl-mm9 <td>14.96 </tr>
<tr><td>simulated_reads2genes_ER.txt <td> 1,125.66 </tr>
<tr><td>simulated_reads_ER.forward.fa <td>5,520.71 </tr>
<tr><td>simulated_reads_ER.reverse.fa <td>5,520.71 </tr>
<tr><td>simulated_reads_junctions-crossed_ER.bed <td> 13.78 </tr>
<tr><td>simulator_config_featurequantifications_ensembl-mm9_ED <td> 53.51 </tr>
<tr><td>true_alignment.bam <td> 2,754.96 </tr>
<tr><td>true_alignment.bam.bai <td> 4.00 </tr>
<tr><td>tophat_without_gene_models.bam <td> 3,561.19 </tr>
<tr><td>tophat_without_gene_models.bam.bai <td> 5.78 </tr>
<tr><td>tophat_with_gene_models.bam <td>3,228.77 </tr>
<tr><td>tophat_with_gene_models.bam.bai<td> 5.45 </tr>
<tr><td>star_without_gene_models.bam <td> 3,138.41 </tr>
<tr><td>star_without_gene_models.bam.bai <td> 5.17 </tr>
<tr><td>star_with_gene_models.bam <td>3,138.41 </tr>
<tr><td>star_with_gene_models.bam.bai <td>5.17 </tr>
</table>
</span>
</div>
</center>
<center>
<a href="http://bp2.s3.amazonaws.com/simulator_config_geneinfo_ensembl-mm9_GTF_MINUS">gene_models.gtf</a>
</center>
</h4>


<!-- In particular: <br>
<a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219408">IVT polyA selected</a>, <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219398">IVT Ribo selected 1</a> and <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219399">IVT Ribo selected 2</a>
-->
</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>

