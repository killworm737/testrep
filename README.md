# testrep

當 src/testrep.php 中宣告
    public function __construct($flag)
    {
        // @todo
    }

在 spec/testrepSpec.php 要如何去執行才不會有錯誤

» .\vendor\bin\phpspec run
testrep\testrep
  10  - it is initializable
      warning: Missing argument 1 for testrep\testrep::__construct() in D:\Visual-NMP-x64\www\testrep\src\testrep\testrep.php
      line 7

                                      100%                                       1
1 specs
1 example (1 broken)
38ms