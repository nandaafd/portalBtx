<?php

namespace App\Http\Repositories;

use App\Models\WoKikppc;
use XBase\Enum\FieldType;
use XBase\Enum\TableType;
use XBase\Header\Column;
use XBase\Header\HeaderFactory;
use XBase\TableCreator;
use XBase\TableEditor;

class WokikppcRepository {

    protected $woKikppc;

    public function __construct(WoKikppc $woKikppc)
    {
        $this->woKikppc = $woKikppc;
    }

    public function createFile($filepath)
    {
        $header = HeaderFactory::create(TableType::DBASE_III_PLUS_MEMO);
        $tableCreator = new TableCreator($filepath, $header);
        $tableCreator
            ->addColumn(new Column([
                'name'   => 'TGL_KIK',
                'type'   => FieldType::DATE
            ]))
            ->addColumn(new Column([
                'name'   => 'NO_KIK',
                'type'   => FieldType::CHAR,
                'length' => 20,
            ]))
            ->addColumn(new Column([
                'name'   => 'XNO_KIK',
                'type'   => FieldType::CHAR,
                'length' => 6,
            ]))
            ->addColumn(new Column([
                'name'   => 'NO_PATRUN',
                'type'   => FieldType::CHAR,
                'length' => 10,
            ]))
            ->addColumn(new Column([
                'name'   => 'NO_TAM',
                'type'   => FieldType::CHAR,
                'length' => 2,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_PROD',
                'type'   => FieldType::CHAR,
                'length' => 10,
            ]))
            ->addColumn(new Column([
                'name'   => 'PJG',
                'type'   => FieldType::NUMERIC,
                'length' => 9,
            ]))
            ->addColumn(new Column([
                'name'   => 'PJG_AWL',
                'type'   => FieldType::NUMERIC,
                'length' => 9,
            ]))
            ->addColumn(new Column([
                'name'   => 'JML_BNG',
                'type'   => FieldType::NUMERIC,
                'length' => 6,
            ]))
            ->addColumn(new Column([
                'name'   => 'MOTIF',
                'type'   => FieldType::CHAR,
                'length' => 20,
            ]))
            ->addColumn(new Column([
                'name'   => 'SUB_MOTIF',
                'type'   => FieldType::CHAR,
                'length' => 20,
            ]))
            ->addColumn(new Column([
                'name'   => 'KONSTR',
                'type'   => FieldType::CHAR,
                'length' => 15,
            ]))
            ->addColumn(new Column([
                'name'   => 'NO_BUKTI',
                'type'   => FieldType::CHAR,
                'length' => 20,
            ]))
            ->addColumn(new Column([
                'name'   => 'TGL_PROD',
                'type'   => FieldType::DATE,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI1',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI2',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI3',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI4',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI5',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI6',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI7',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI8',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI9',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI10',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI11',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI12',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI13',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI14',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI15',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'LUSI16',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN1',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN2',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN3',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN4',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN5',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN6',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN7',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN8',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN9',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN10',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN11',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN12',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN13',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN14',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN15',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PAKAN16',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR1',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR2',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR3',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR4',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR5',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR6',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR7',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR8',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR9',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR10',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR11',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR12',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR13',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR14',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR15',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'SULUR16',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL1',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL2',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL3',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL4',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL5',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL6',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL7',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL8',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL9',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL10',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL11',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL12',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL13',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL14',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL15',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'TUMPAL16',
                'type'   => FieldType::NUMERIC,
                'length' => 10,
                'decimalCount' => 3,
            ]))
            ->addColumn(new Column([
                'name'   => 'PASSDIR',
                'type'   => FieldType::CHAR,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'PASSDES',
                'type'   => FieldType::CHAR,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'NAMDIR',
                'type'   => FieldType::CHAR,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'NAMDES',
                'type'   => FieldType::CHAR,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'CEK',
                'type'   => FieldType::LOGICAL,
                'length' => 1,
            ]))
            ->addColumn(new Column([
                'name'   => 'CEK1',
                'type'   => FieldType::LOGICAL,
                'length' => 1,
            ]))
            ->addColumn(new Column([
                'name'   => 'TGL_CEK',
                'type'   => FieldType::DATE,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'PASSWORD',
                'type'   => FieldType::CHAR,
                'length' => 8,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG1',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG2',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG3',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG4',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG5',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG6',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG7',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG8',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG9',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG10',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG11',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG12',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG13',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG14',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG15',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODE_BRG16',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS1',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS2',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS3',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS4',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS5',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS6',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS7',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS8',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS9',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS10',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS11',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS12',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS13',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS14',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS15',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODS16',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT1',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT2',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT3',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT4',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT5',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT6',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT7',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT8',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT9',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT10',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT11',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT12',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT13',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT14',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT15',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KODT16',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD1',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD2',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD3',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD4',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD5',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD6',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD7',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD8',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD9',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD10',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD11',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD12',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD13',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD14',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD15',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'KOD16',
                'type'   => FieldType::CHAR,
                'length' => 13,
            ]))
            ->addColumn(new Column([
                'name'   => 'LP',
                'type'   => FieldType::LOGICAL,
                'length' => 1,
            ]))
            ->addColumn(new Column([
                'name'   => 'NO_PO',
                'type'   => FieldType::CHAR,
                'length' => 20,
            ]))
            ->addColumn(new Column([
                'name'   => 'ID',
                'type'   => FieldType::LOGICAL,
                'length' => 1,
            ]))
            ->addColumn(new Column([
                'name'   => 'KET',
                'type'   => FieldType::CHAR,
                'length' => 20,
            ]))
            ->addColumn(new Column([
                'name'   => 'WRN_VISUAL',
                'type'   => FieldType::CHAR,
                'length' => 30,
            ]));

        $tableCreator
            ->save();
    }

    public function write_wokikppc($tanggal, $bulan, $tahun)
    {
        try {
            $table = new TableEditor(
                'doc/WO' . $tahun . $bulan . '.dbf',
                [
                'editMode' => TableEditor::EDIT_MODE_CLONE, //default 
                ]
            );

            if($tanggal == '') {
                $get_data_wo = $this->woKikppc->get_wo($bulan, $tahun);
            } else {
                $get_data_wo = $this->woKikppc->get_wo_today($tanggal, $bulan, $tahun);
            }

            foreach ($get_data_wo as $row) {
                $tam = $row->kd_tmb;
                $t = (int)$tam;

                $sisir = (int)$row->no_sisir;
                $pick = (int)$row->pick;

                $record = $table->appendRecord();
                $tgl = explode("-", $row->wow_date);
                $record->set('TGL_KIK', $tgl[0] . $tgl[1] . $tgl[2]);
                $record->set('NO_KIK', $row->no_kik);
                $record->set('NO_PATRUN', substr($row->kd_patrun, 7, 4));
                $record->set('NO_TAM', substr("0", 0, 2 - strlen($t)) . $t);
                $record->set('KODE_PROD', $row->prd_code);
                $record->set('PJG', $row->pjg_pakan);
                $record->set('JML_BNG', $row->jml_lusi);
                $record->set('MOTIF', $row->motive_name);
                $record->set('NO_BUKTI', $row->no_bukti);

                // Lusi
                $data_lusi = $this->woKikppc->get_lusi($row->no_kik);

                foreach ($data_lusi as $lusi) {

                    $NamaBenangLus = $lusi->short_desc;
                    preg_match_all('!\d+!', $NamaBenangLus, $num);
                    preg_match_all('/DTY/', $NamaBenangLus, $str2);
                    $lus = 0;
                    $nilai1 = $num[0][0];
                    $nilai2 = $num[0][1] ?? 0;
                    $nilaix = $str2[0][0] ?? 0;

                    if ($nilaix == TRUE) {
                        $lus = $nilai1;
                    } elseif ($nilai2 != 0) {
                        $lus = $nilai1 / $nilai2;
                    } else {
                        $lus = $nilai1;
                    }

                    if ($lusi->no_urut == '1') {
                        $record->set('LUSI1', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG1', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '2') {
                        $record->set('LUSI2', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG2', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '3') {
                        $record->set('LUSI3', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG3', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '4') {
                        $record->set('LUSI4', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG4', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '5') {
                        $record->set('LUSI5', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG5', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '6') {
                        $record->set('LUSI5', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG6', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '7') {
                        $record->set('LUSI5', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG7', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '8') {
                        $record->set('LUSI5', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG8', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '9') {
                        $record->set('LUSI5', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG9', $lusi->barcode);
                    }
                    if ($lusi->no_urut == '10') {
                        $record->set('LUSI5', number_format($lusi->qty_kg, 2));
                        $record->set('KODE_BRG10', $lusi->barcode);
                    }
                }
                // End Lusi
                // PAKAN
                $data_pakan = $this->woKikppc->get_pakan($row->no_kik);
                foreach ($data_pakan as $pakan) {

                    $NamaBenangPak = $pakan->short_desc;
                    preg_match_all('!\d+!', $NamaBenangPak, $num2);
                    preg_match_all('/DTY/', $NamaBenangPak, $str3);

                    $pak = 0;
                    $nilai3 = $num2[0][0];
                    $nilai4 = $num2[0][1] ?? 0;
                    $nilaiy = $str3[0][0] ?? 0;

                    if ($nilaiy == TRUE) {
                        $pak = $nilai3;
                    } elseif ($nilai4 != 0) {
                        $pak = $nilai3 / $nilai4;
                    } else {
                        $pak = $nilai3;
                    }

                    $qty_format = number_format($pakan->qty_kg, 2);
                    if ($pakan->no_urut == '1') {
                        $record->set('PAKAN1', $qty_format);
                        $record->set('KOD1', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '2') {
                        $record->set('PAKAN2', $qty_format);
                        $record->set('KOD2', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '3') {
                        $record->set('PAKAN3', $qty_format);
                        $record->set('KOD3', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '4') {
                        $record->set('PAKAN4', $qty_format);
                        $record->set('KOD4', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '5') {
                        $record->set('PAKAN5', $qty_format);
                        $record->set('KOD5', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '6') {
                        $record->set('PAKAN6', $qty_format);
                        $record->set('KOD6', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '7') {
                        $record->set('PAKAN7', $qty_format);
                        $record->set('KOD7', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '8') {
                        $record->set('PAKAN8', $qty_format);
                        $record->set('KOD8', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '9') {
                        $record->set('PAKAN9', $qty_format);
                        $record->set('KOD9', $pakan->barcode);
                    }
                    if ($pakan->no_urut == '10') {
                        $record->set('PAKAN10', $qty_format);
                        $record->set('KOD10', $pakan->barcode);
                    }
                }
                // End Pakan
                // Tumpal
                $data_tumpal = $this->woKikppc->get_tumpal($row->no_kik);
                foreach ($data_tumpal as $tumpal) {
                    $qty_format = number_format($tumpal->qty_kg, 2);
                    if ($tumpal->no_urut == '1') {
                        $record->set('TUMPAL1', $qty_format);
                        $record->set('KODT1', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '2') {
                        $record->set('TUMPAL2', $qty_format);
                        $record->set('KODT2', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '3') {
                        $record->set('TUMPAL3', $qty_format);
                        $record->set('KODT3', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '4') {
                        $record->set('TUMPAL4', $qty_format);
                        $record->set('KODT4', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '5') {
                        $record->set('TUMPAL5', $qty_format);
                        $record->set('KODT5', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '6') {
                        $record->set('TUMPAL6', $qty_format);
                        $record->set('KODT6', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '7') {
                        $record->set('TUMPAL7', $qty_format);
                        $record->set('KODT7', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '8') {
                        $record->set('TUMPAL8', $qty_format);
                        $record->set('KODT8', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '9') {
                        $record->set('TUMPAL9', $qty_format);
                        $record->set('KODT9', $tumpal->barcode);
                    }
                    if ($tumpal->no_urut == '10') {
                        $record->set('TUMPAL10', $qty_format);
                        $record->set('KODT10', $tumpal->barcode);
                    }
                }
                // End Tumpal
                // Sulur
                $data_sulur = $this->woKikppc->get_sulur($row->no_kik);
                foreach ($data_sulur as $sulur) {
                    $qty_format = number_format($sulur->qty_kg, 2);
                    if ($sulur->no_urut == '1') {
                        $record->set('SULUR1', $qty_format);
                        $record->set('KODS1', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '2') {
                        $record->set('SULUR2', $qty_format);
                        $record->set('KODS2', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '3') {
                        $record->set('SULUR3', $qty_format);
                        $record->set('KODS3', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '4') {
                        $record->set('SULUR4', $qty_format);
                        $record->set('KODS4', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '5') {
                        $record->set('SULUR5', $qty_format);
                        $record->set('KODS5', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '6') {
                        $record->set('SULUR6', $qty_format);
                        $record->set('KODS6', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '7') {
                        $record->set('SULUR7', $qty_format);
                        $record->set('KODS7', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '8') {
                        $record->set('SULUR8', $qty_format);
                        $record->set('KODS8', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '9') {
                        $record->set('SULUR9', $qty_format);
                        $record->set('KODS9', $sulur->barcode);
                    }
                    if ($sulur->no_urut == '10') {
                        $record->set('SULUR10', $qty_format);
                        $record->set('KODS10', $sulur->barcode);
                    }
                }
                // End Sulur
                $record->set('KONSTR', $lus . '/' . $sisir . '*' . $pak . '/' . $pick);

                $table
                    ->writeRecord($record);
            }

            $table
                ->save()
                ->close();

            return response()->json(['status' => TRUE, 'message' => 'Berhasil dijalankan'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => FALSE, 'message' => $th], 500);
        }
    }
}