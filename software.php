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

<h2>Benchmarked Software</h2>
<table>
<tr>
  <th>Name</th>
  <th>Pubmed</th>
  <th>Version</th>
</tr>
<tr>
  <td>CLC Genomics Workbench</td>
  <td><a href="http://www.clcbio.com/products/clc-genomics-workbench/">CLC Genomics Workbench website</a></td>
  <td>8.5</td>
</tr>
<tr>
  <td>ContextMap 2</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/25928589">ContextMap 2: fast and accurate context-based RNA-seq mapping (Bonfert 2015)</a></td>
  <td>2.6.0</td>
</tr>
<tr>
  <td>CRAC</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23537109">CRAC: an integrated approach to the analysis of RNA-seq reads (Philippe 2013)</a></td>
  <td>2.4.0</td>
</tr>
<tr>
<tr>
  <td>GSNAP</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/20147302">Fast and SNP-tolerant detection of complex variants and splicing in short reads (Wu 2010)</a></td>
  <td>2015-9-29</td>
</tr>
<tr>
  <td>HISAT</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/25751142">HISAT: a fast spliced aligner with low memory requirements. (Kim 2015)</a></td>
  <td>0.1.6beta</td>
</tr>
<tr>
  <td>HISAT2</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/25751142">HISAT: a fast spliced aligner with low memory requirements. (Kim 2015)</a></td>
  <td>2.0.0beta</td>
</tr>
<tr>
  <td>MapSplice</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/20802226">MapSplice: Accurate mapping of RNA-seq reads for splice junction discovery (Wang 2010)</a></td>
  <td>2.2.0</td>
</tr>
<tr>
  <td>NovoAlign</td>
  <td><a href="http://www.novocraft.com/products/novoalign/">Novocraft Technologies website</a></td>
  <td>3.02.13</td>
</tr>
<tr>
  <td>OLego</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23571760">OLego: fast and sensitive mapping of spliced mRNA-Seq reads using small seeds (Wu 2013)</a></td>
  <td>1.1.6</td>
</tr>
<tr>
  <td>RUM</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/21775302">Comparative analysis of RNA-Seq alignment algorithms and the RNA-Seq unified mapper (RUM) (Grant 2011)</a></td>
  <td>2.0.5_06</td>
</tr>
<tr>
  <td>SOAPSplice</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/22303342">SOAPsplice: genome-wide ab initio detection of splice junctions from RNA-Seq data (Huang 2011)</a></td>
  <td>1.10</td>
</tr>
<tr>
  <td>STAR</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23104886">STAR: ultrafast universal RNA-seq aligner (Dobin 2013)</a></td>
  <td>2.5.0a</td>
</tr>
<tr>
  <td>TopHat2</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23618408">TopHat2: accurate alignment of transcriptomes in the presence of insertions, deletions and gene fusions (Kim 2013)</a></td>
  <td>2.1.0</td>
</tr>
</table>


<h2>Other tools used in this project</h2>
<table>
<tr>
  <th>Name</th>
  <th>Pubmed</th>
  <th>Version</th>
</tr>
<tr>
  <td>Bowtie</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/19261174">Ultrafast and memory-efficient alignment of short DNA sequences to the human genome (Langmead 2009)</a></td>
  <td>1.1.2</td>
</tr>
<tr>
  <td>Bowtie 2</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/22388286">Fast gapped-read alignment with Bowtie 2 (Langmead 2012)</a></td>
  <td>2.2.5</td>
</tr>
<tr>
  <td>SAMtools</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/19505943">The Sequence Alignment/Map format and SAMtools (Li 2009)</a></td>
  <td>0.1.19</td>
</tr>
<tr>
  <td>USeq</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/19061503">Empirical methods for controlling false positives and estimating confidence in ChIP-Seq peaks (Nix 2008)</a></td>
  <td>8.9.5</td>
</tr>
</table>

<h2>Our Code to run and evaluate the presented algorithms</h2>
<p>
Scripts that run the benchmarked software can be found at <a href="https://bitbucket.org/baruz/aligner-benchmark/overview">bitbucket/baruz</a>.
To compare the results of each algorithm to the truth please refer to this repository <a href="https://github.com/khayer/aligner_benchmark">github/khayer</a>.
</p>

</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>
