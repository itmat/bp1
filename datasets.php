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

DESCRIPTION HOW WE SIMULATED THE DATA (CITE BEEERS)

<h3>Genomes and Annotation</h3>
SOMETHING ABOUT GENOMES AND ANNOTATION
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
<h4>Download: <br>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t1r1.tar.bz2">human_t1r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t1r1.tar.bz2.md5sum">human_t1r1.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t1r1.tar.bz2 <td> 923</tr>
<tr><td>simulated_reads_HG19t1r1.cig <td> 3,192.1</tr>
<tr><td>fraglenhisto_HG19t1r1.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t1r1.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t1r2.tar.bz2">human_t1r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t1r2.tar.bz2.md5sum">human_t1r2.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t1r2.tar.bz2 <td> 923</tr>
<tr><td>simulated_reads_HG19t1r2.cig <td> 3,192.0</tr>
<tr><td>fraglenhisto_HG19t1r2.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t1r2.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t1r3.tar.bz2">human_t1r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t1r3.tar.bz2.md5sum">human_t1r3.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t1r3.tar.bz2 <td> 923</tr>
<tr><td>simulated_reads_HG19t1r3.cig <td> 3,192.2 </tr>
<tr><td>fraglenhisto_HG19t1r3.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t1r3.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t1r1.tar.bz2">malaria_t1r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t1r1.tar.bz2.md5sum">malaria_t1r1.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t1r1.tar.bz2 <td> 836</tr>
<tr><td>simulated_reads_PFALt1r1.cig <td> 3,007.0 </tr>
<tr><td>fraglenhisto_PFALt1r1.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt1r1.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t1r2.tar.bz2">malaria_t1r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t1r2.tar.bz2.md5sum">malaria_t1r2.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t1r2.tar.bz2 <td> 835</tr>
<tr><td>simulated_reads_PFALt1r2.cig <td> 3,006.7 </tr>
<tr><td>fraglenhisto_PFALt1r2.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt1r2.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t1r3.tar.bz2">malaria_t1r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t1r3.tar.bz2.md5sum">malaria_t1r3.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t1r3.tar.bz2 <td> 836</tr>
<tr><td>simulated_reads_PFALt1r3.cig <td> 3,007.1 </tr>
<tr><td>fraglenhisto_PFALt1r3.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt1r3.log <td> 0</tr>
</table>
</span>
</div>
</h4>

<h3>Dataset Test 2 (T2)</h3>

<p>
SOMETHING ABOUT T2
</p>
<h4>Download: <br>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t2r1.tar.bz2">human_t2r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t2r1.tar.bz2.md5sum">human_t2r1.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t2r1.tar.bz2 <td> 933</tr>
<tr><td>simulated_reads_HG19t2r1.cig <td> 3,209.5</tr>
<tr><td>fraglenhisto_HG19t2r1.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t2r1.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t2r2.tar.bz2">human_t2r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t2r2.tar.bz2.md5sum">human_t2r2.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t2r2.tar.bz2 <td> 933</tr>
<tr><td>simulated_reads_HG19t2r2.cig <td> 3,209.6</tr>
<tr><td>fraglenhisto_HG19t2r2.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t2r2.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t2r3.tar.bz2">human_t2r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t2r3.tar.bz2.md5sum">human_t2r3.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t2r3.tar.bz2 <td> 933</tr>
<tr><td>simulated_reads_HG19t2r3.cig <td> 3,209.4</tr>
<tr><td>fraglenhisto_HG19t2r3.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t2r3.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t2r1.tar.bz2">malaria_t2r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t2r1.tar.bz2.md5sum">malaria_t2r1.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t2r1.tar.bz2 <td> 857</tr>
<tr><td>simulated_reads_PFALt2r1.cig <td> 3,039.9 </tr>
<tr><td>fraglenhisto_PFALt2r1.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt2r1.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t2r2.tar.bz2">malaria_t2r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t2r2.tar.bz2.md5sum">malaria_t2r2.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t2r2.tar.bz2 <td> 857</tr>
<tr><td>simulated_reads_PFALt2r2.cig <td> 3,039.8 </tr>
<tr><td>fraglenhisto_PFALt2r2.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt2r2.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t2r3.tar.bz2">malaria_t2r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t2r3.tar.bz2.md5sum">malaria_t2r3.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t2r3.tar.bz2 <td> 857</tr>
<tr><td>simulated_reads_PFALt2r3.cig <td> 3,040.4 </tr>
<tr><td>fraglenhisto_PFALt2r3.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt2r3.log <td> 0</tr>
</table>
</span>
</div>
</h4>

<h3>Dataset Test 3 (T3)</h3>

<p>
SOMETHING ABOUT T3
</p>
<h4>Download: <br>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t3r1.tar.bz2">human_t3r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t3r1.tar.bz2.md5sum">human_t3r1.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t3r1.tar.bz2 <td> 951</tr>
<tr><td>simulated_reads_HG19t3r1.cig <td> 3,243.3</tr>
<tr><td>fraglenhisto_HG19t3r1.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t3r1.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t3r2.tar.bz2">human_t3r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t3r2.tar.bz2.md5sum">human_t3r2.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t3r2.tar.bz2 <td> 951</tr>
<tr><td>simulated_reads_HG19t3r2.cig <td> 3,243.2</tr>
<tr><td>fraglenhisto_HG19t3r2.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t3r2.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/human_t3r3.tar.bz2">human_t3r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/human_t3r3.tar.bz2.md5sum">human_t3r3.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>human_t3r3.tar.bz2 <td> 951</tr>
<tr><td>simulated_reads_HG19t3r3.cig <td> 3,243.5</tr>
<tr><td>fraglenhisto_HG19t3r3.txt <td> 0</tr>
<tr><td>simulated_reads_HG19t3r3.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t3r1.tar.bz2">malaria_t3r1.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t3r1.tar.bz2.md5sum">malaria_t3r1.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t3r1.tar.bz2 <td> 900</tr>
<tr><td>simulated_reads_PFALt3r1.cig <td> 3106.3 </tr>
<tr><td>fraglenhisto_PFALt3r1.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt3r1.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t3r2.tar.bz2">malaria_t3r2.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t3r2.tar.bz2.md5sum">malaria_t3r2.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t3r2.tar.bz2 <td> 901</tr>
<tr><td>simulated_reads_PFALt3r2.cig <td> 3,107.5 </tr>
<tr><td>fraglenhisto_PFALt3r2.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt3r2.log <td> 0</tr>
</table>
</span>
</div>
<div id="under-element">
<center>
<a href="http://bp1.s3.amazonaws.com/malaria_t3r3.tar.bz2">malaria_t3r3.tar.bz2</a>
  (<a href="http://bp1.s3.amazonaws.com/malaria_t3r3.tar.bz2.md5sum">malaria_t3r3.tar.bz2.md5sum</a>)
</center>
<span id="hover-element">
<table>
<tr><th>File name <th> File size in mb</tr>
<tr><td>malaria_t3r3.tar.bz2 <td> 900</tr>
<tr><td>simulated_reads_PFALt3r3.cig <td> 3,106.6 </tr>
<tr><td>fraglenhisto_PFALt3r3.txt <td> 0</tr>
<tr><td>simulated_reads_PFALt3r3.log <td> 0</tr>
</table>
</span>
</div>
</h4>


<!-- In particular: <br>
<a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219408">IVT polyA selected</a>, <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219398">IVT Ribo selected 1</a> and <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSM1219399">IVT Ribo selected 2</a>
-->
</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>

