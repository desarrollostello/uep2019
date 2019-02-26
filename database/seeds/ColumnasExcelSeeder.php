<?php

use Illuminate\Database\Seeder;
use App\Columnasexcel;

class ColumnasExcelSeeder extends Seeder
{
    /*
    'nombre',
    'descripcion',
    'orden',
    'seleccionada',
    'provincia_id',
    'slug'
    */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Columnasexcel::create([
          'nombre'          =>'fechaIngreso' ,
          'descripcion'     =>'Fecha Ingreso',
          'orden'           =>1,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-1-1-1-0001',
        ]);
        Columnasexcel::create([
          'nombre'          =>'nombre' ,
          'descripcion'     =>'Nombre Proyecto',
          'orden'           =>2,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-2-1-1-0002',
        ]);
        Columnasexcel::create([
          'nombre'          =>'numeroInterno' ,
          'descripcion'     =>'Nro Interno',
          'orden'           =>3,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-3-1-1-0003',
        ]);
        Columnasexcel::create([
          'nombre'          =>'numeroCfi',
          'descripcion'     =>'Nro CFI',
          'orden'           =>4,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-4-1-1-0004',
        ]);
        Columnasexcel::create([
          'nombre'          =>'localidad_id',
          'descripcion'     =>'Localidad',
          'orden'           =>5,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-5-1-1-0005',
        ]);
        Columnasexcel::create([
          'nombre'          =>'lineaCredito_id',
          'descripcion'     =>'Línea Crédito',
          'orden'           =>6,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-6-1-1-0006',
        ]);
        Columnasexcel::create([
          'nombre'          =>'estado_id',
          'descripcion'     =>'Estado',
          'orden'           =>7,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-7-1-1-0007',
        ]);
        Columnasexcel::create([
          'nombre'          =>'estadoInterno_id',
          'descripcion'     =>'Estado Interno',
          'orden'           =>8,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-8-1-1-0008',
        ]);
        Columnasexcel::create([
          'nombre'          =>'sector_id',
          'descripcion'     =>'Sector',
          'orden'           =>9,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-9-1-1-0009',
        ]);
        Columnasexcel::create([
          'nombre'          =>'titular',
          'descripcion'     =>'Titular',
          'orden'           =>10,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-10-1-1-0010',
        ]);
        Columnasexcel::create([
          'nombre'          =>'monto',
          'descripcion'     =>'Monto',
          'orden'           =>11,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-11-1-1-0011',
        ]);
        Columnasexcel::create([
          'nombre'          =>'tamanio',
          'descripcion'     =>'Tamaño',
          'orden'           =>12,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-12-1-1-0012',
        ]);
        Columnasexcel::create([
          'nombre'          =>'tipo',
          'descripcion'     =>'Tipo',
          'orden'           =>13,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-13-1-1-0013',
        ]);
        Columnasexcel::create([
          'nombre'          =>'domicilioProyecto',
          'descripcion'     =>'Domicilio Proyecto',
          'orden'           =>14,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-14-1-1-0014',
        ]);
        Columnasexcel::create([
          'nombre'          =>'domicilioLegal',
          'descripcion'     =>'Domicilio Legal',
          'orden'           =>15,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-15-1-1-0015',
        ]);
        Columnasexcel::create([
          'nombre'          =>'telefono',
          'descripcion'     =>'Teléfono',
          'orden'           =>16,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-16-1-1-0016',
        ]);
        Columnasexcel::create([
          'nombre'          =>'email',
          'descripcion'     =>'E-mail',
          'orden'           =>17,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-17-1-1-0017',
        ]);
        Columnasexcel::create([
          'nombre'          =>'web',
          'descripcion'     =>'Web',
          'orden'           =>18,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-18-1-1-0018',
        ]);
        Columnasexcel::create([
          'nombre'          =>'productos',
          'descripcion'     =>'Productos',
          'orden'           =>19,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-19-1-1-0019',
        ]);
        Columnasexcel::create([
          'nombre'          =>'ciuu',
          'descripcion'     =>'CIUU',
          'orden'           =>20,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-20-1-1-0020',
        ]);
        Columnasexcel::create([
          'nombre'          =>'MO',
          'descripcion'     =>'M.O.',
          'orden'           =>21,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-21-1-1-0021',
        ]);
        Columnasexcel::create([
          'nombre'          =>'enUEP',
          'descripcion'     =>'En UEP',
          'orden'           =>22,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-22-1-1-0022',
        ]);
        Columnasexcel::create([
          'nombre'          =>'descripcion',
          'descripcion'     =>'Descripción',
          'orden'           =>23,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-23-1-1-0023',
        ]);
        Columnasexcel::create([
          'nombre'          =>'inversionTotal',
          'descripcion'     =>'Inv. Total',
          'orden'           =>24,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-24-1-1-0024',
        ]);
        Columnasexcel::create([
          'nombre'          =>'inversionRealizada',
          'descripcion'     =>'Inv. Realizada',
          'orden'           =>25,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-25-1-1-0025',
        ]);
        Columnasexcel::create([
          'nombre'          =>'inversionARealizar_ct',
          'descripcion'     =>'Inv. A Realizar CT',
          'orden'           =>26,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-26-1-1-0026',
        ]);
        Columnasexcel::create([
          'nombre'          =>'inversionARealizar_af',
          'descripcion'     =>'Inv. A Realizar AF',
          'orden'           =>27,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-27-1-1-0027',
        ]);
        Columnasexcel::create([
          'nombre'          =>'figuraLegal_id',
          'descripcion'     =>'Figura Legal',
          'orden'           =>28,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-28-1-1-0028',
        ]);
        Columnasexcel::create([
          'nombre'          =>'periodicidad_id',
          'descripcion'     =>'Periodicidad',
          'orden'           =>29,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-29-1-1-0029',
        ]);
        Columnasexcel::create([
          'nombre'          =>'destinoCredito_id',
          'descripcion'     =>'Destino Crédito',
          'orden'           =>30,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-30-1-1-0030',
        ]);
        Columnasexcel::create([
          'nombre'          =>'refinanciado',
          'descripcion'     =>'Refinanciado',
          'orden'           =>31,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-31-1-1-0031',
        ]);
        Columnasexcel::create([
          'nombre'          =>'plazoGracia',
          'descripcion'     =>'Gracia',
          'orden'           =>32,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-32-1-1-0032',
        ]);
        Columnasexcel::create([
          'nombre'          =>'plazoAmortizacion',
          'descripcion'     =>'Amortización',
          'orden'           =>33,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-33-1-1-0033',
        ]);
        Columnasexcel::create([
          'nombre'          =>'cantidadDesembolsos',
          'descripcion'     =>'Cant. Desembolsos',
          'orden'           =>34,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-34-1-1-0034',
        ]);
        Columnasexcel::create([
          'nombre'          =>'tasa',
          'descripcion'     =>'Tasa',
          'orden'           =>35,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-35-1-1-0035',
        ]);
        Columnasexcel::create([
          'nombre'          =>'garantia_id',
          'descripcion'     =>'Garantía',
          'orden'           =>36,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-36-1-1-0036',
        ]);
        Columnasexcel::create([
          'nombre'          =>'descripcionGarantia',
          'descripcion'     =>'Desc. Garantía',
          'orden'           =>37,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-37-1-1-0037',
        ]);
        Columnasexcel::create([
          'nombre'          =>'sujetoCredito',
          'descripcion'     =>'Sujeto Crédito',
          'orden'           =>38,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-38-1-1-0038',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaEnvioBanco',
          'descripcion'     =>'Envío Bco',
          'orden'           =>39,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-39-1-1-0039',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaRespuestaBanco',
          'descripcion'     =>'Resp. Bco',
          'orden'           =>40,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-40-1-1-0040',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaCaducoBanco',
          'descripcion'     =>'Caduco Bco',
          'orden'           =>41,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-41-1-1-0041',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaAprobadoUep',
          'descripcion'     =>'Aprobado UEP',
          'orden'           =>42,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-42-1-1-0042',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaEnviadoCfi',
          'descripcion'     =>'Enviado CFI',
          'orden'           =>43,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-43-1-1-0043',
        ]);
        Columnasexcel::create([
          'nombre'          =>'echaAprobadoCfi',
          'descripcion'     =>'Aprobado CFI',
          'orden'           =>44,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-44-1-1-0044',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaTramdispo',
          'descripcion'     =>'TramDispo',
          'orden'           =>45,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-45-1-1-0045',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaComunicaTran',
          'descripcion'     =>'ComunicaTran',
          'orden'           =>46,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-46-1-1-0046',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaDesembolso',
          'descripcion'     =>'Desembolso',
          'orden'           =>47,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-47-1-1-0047',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaEfectivizacion',
          'descripcion'     =>'Efectivización',
          'orden'           =>48,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-48-1-1-0048',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaDesistido',
          'descripcion'     =>'Desistido',
          'orden'           =>49,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-49-1-1-0049',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaJudicial',
          'descripcion'     =>'Judicial',
          'orden'           =>50,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-50-1-1-0050',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaCancelado',
          'descripcion'     =>'Cancelado',
          'orden'           =>51,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-51-1-1-0051',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaArchivado',
          'descripcion'     =>'Archivado',
          'orden'           =>52,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-52-1-1-0052',
        ]);
        Columnasexcel::create([
          'nombre'          =>'fechaUltimoMovimiento',
          'descripcion'     =>'Ult. Mov.',
          'orden'           =>53,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-53-1-1-0053',
        ]);
        Columnasexcel::create([
          'nombre'          =>'observaciones',
          'descripcion'     =>'Observaciones',
          'orden'           =>54,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-54-1-1-0054',
        ]);
        Columnasexcel::create([
          'nombre'          =>'sucursal_id',
          'descripcion'     =>'Sucursal',
          'orden'           =>55,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasexcel-55-1-1-0055',
        ]);
    }
}
