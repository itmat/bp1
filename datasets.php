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
<a href="http://bp1.s3.amazonaws.com/human.tar.bz2">human.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human.tar.bz2.md5sum">human.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria.tar.bz2 <td> 13</tr>
<tr><td>simulator_config_featurequantifications_hg19 <td> 32.7</tr>
<tr><td>simulator_config_geneinfo_hg19_BED <td> 7.2</tr>
<tr><td>simulator_config_geneinfo_hg19_GTF <td> 39.1</tr>
</table>
</span>
</div>
<center>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria.tar.bz2">malaria.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria.tar.bz2.md5sum">malaria.tar.bz2.md5sum</a>)
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
</h4>

<h3>Dataset Test 1 (T1)</h3>

<p>
SOMETHING ABOUT T1
</p>
<h5>Download: <br>
<div id="under-element">

<a href="http://bp1.s3.amazonaws.com/human_t1r1.tar.bz2">human_t1r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t1r1.tar.bz2.md5sum">human_t1r1.tar.bz2.md5sum</a>)

<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
</table>
</span>
</div>
<div id="under-element">

<a href="http://bp1.s3.amazonaws.com/human_t1r2.tar.bz2">human_t1r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t1r2.tar.bz2.md5sum">human_t1r2.tar.bz2.md5sum</a>)

<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
</table>
</span>
</div>
<div id="under-element">

<a href="http://bp1.s3.amazonaws.com/human_t1r3.tar.bz2">human_t1r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t1r3.tar.bz2.md5sum">human_t1r3.tar.bz2.md5sum</a>)

<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
</table>
</span>
</div>
<div id="under-element">

<a href="http://bp1.s3.amazonaws.com/malaria_t1r1.tar.bz2">malaria_t1r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t1r1.tar.bz2.md5sum">malaria_t1r1.tar.bz2.md5sum</a>)

<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
</table>
</span>
</div>
<div id="under-element">

<a href="http://bp1.s3.amazonaws.com/malaria_t1r2.tar.bz2">malaria_t1r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t1r2.tar.bz2.md5sum">malaria_t1r2.tar.bz2.md5sum</a>)

<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
</table>
</span>
</div>
<div id="under-element">

<a href="http://bp1.s3.amazonaws.com/malaria_t1r3.tar.bz2">malaria_t1r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t1r3.tar.bz2.md5sum">malaria_t1r3.tar.bz2.md5sum</a>)

<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>hayer1_T1.tar.bz2 <td> 18,106.76</tr>
<tr><td>simulated_reads_test1.cig <td>16,518.19</tr>
<tr><td>simulator_config_geneinfo_test1 <td>9.42</tr>
<tr><td>simulator_config_featurequantifications_test1 <td>35.74</tr>
</table>
</span>
</div>
</h5>

<h3>Dataset Test 2 (T2)</h3>

<p>
SOMETHING ABOUT T2
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

<!-- In particular: <br>
<a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219408">IVT polyA selected</a>, <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219398">IVT Ribo selected 1</a> and <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219399">IVT Ribo selected 2</a>
-->
</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>

