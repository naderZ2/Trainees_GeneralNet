<?php


class DNAOperations
{
    public $dnaSequence;

    public function __construct($dnaSequence)
    {
        $this->dnaSequence = $dnaSequence;
    }

    public function validateDNA(): bool
    {
        $dnaRegex = '/^[ACGT]+$/';
        return preg_match($dnaRegex, $this->dnaSequence) === 1;
    }

    public function getDNALength(): int
    {
        return strlen($this->dnaSequence);
    }

    public function DNAtoRNA(): string
    {
        return str_replace('T', 'U', $this->dnaSequence);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dnaSequence = strtoupper($_POST['dnaSequence']);

    $dnaOperations = new DNAOperations($dnaSequence);

    if (!$dnaOperations->validateDNA()) {
        echo 'The DNA sequence is invalid.';
        return;
    }

    if (isset($_POST['validateDNA'])) {
        echo 'The DNA sequence is valid.';
    } elseif (isset($_POST['getDNALength'])) {
        echo 'DNA length:', $dnaOperations->getDNALength();
    } elseif (isset($_POST['DNAtoRNA'])) {
        echo 'DNA to RNA:', $dnaOperations->DNAtoRNA();
    }
}

?>

<html>

<head>
    <title>DNA Text Input</title>
</head>

<body>
    <h1>DNA Text Input</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="dnaSequence" placeholder="Enter a DNA sequence">
        <button type="submit" name="validateDNA">Validate DNA</button>
        <button type="submit" name="getDNALength">Get DNA Length</button>
        <button type="submit" name="DNAtoRNA">DNA to RNA</button>
    </form>
</body>

</html>