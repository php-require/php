/*Работа с Deal*/

    private $insertDealSql = "INSERT INTO `modx_b24_deals`(`id_deal`, `TITLE`, `STAGE_ID`, `CURRENCY_ID`, `OPPORTUNITY`, `ID_RESOURCE_BOOKING`) VALUES (?,?,?,?,?,?) ON DUPLICATE KEY UPDATE  
        `TITLE`=?,
        `STAGE_ID`=?,
        `CURRENCY_ID`=?,
        `OPPORTUNITY`=?,
        `ID_RESOURCE_BOOKING`=? 
        ";

    public function insertDeal(int $id_deal, string $TITLE, string $STAGE_ID, string $CURRENCY_ID, float $OPPORTUNITY, $ID_RESOURCE_BOOKING){
        
        $pdo = $this->getPdo();
        $stmt = $pdo->prepare($this->insertDealSql);
       
        $values = [$id_deal, $TITLE, $STAGE_ID, $CURRENCY_ID, $OPPORTUNITY, $ID_RESOURCE_BOOKING,//здесь insert
        $TITLE, $STAGE_ID, $CURRENCY_ID, $OPPORTUNITY, $ID_RESOURCE_BOOKING//здесь update
    ];
        $result=$stmt->execute($values);
        return $result;
    }