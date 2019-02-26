<?php

use Illuminate\Database\Seeder;
use App\Columnasview;

class ColumnasViewSeeder extends Seeder
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
        Columnasview::create([
          'nombre'          =>'fechaIngreso' ,
          'descripcion'     =>'Fecha Ingreso',
          'orden'           =>1,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-1-1-1-0001',
        ]);
        Columnasview::create([
          'nombre'          =>'nombre' ,
          'descripcion'     =>'Nombre Proyecto',
          'orden'           =>2,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-2-1-1-0002',
        ]);
        Columnasview::create([
          'nombre'          =>'numeroInterno' ,
          'descripcion'     =>'Nro Interno',
          'orden'           =>3,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-3-1-1-0003',
        ]);
        Columnasview::create([
          'nombre'          =>'numeroCfi',
          'descripcion'     =>'Nro CFI',
          'orden'           =>4,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-4-1-1-0004',
        ]);
        Columnasview::create([
          'nombre'          =>'localidad_id',
          'descripcion'     =>'Localidad',
          'orden'           =>5,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-5-1-1-0005',
        ]);
        Columnasview::create([
          'nombre'          =>'lineaCredito_id',
          'descripcion'     =>'Línea Crédito',
          'orden'           =>6,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-6-1-1-0006',
        ]);
        Columnasview::create([
          'nombre'          =>'estado_id',
          'descripcion'     =>'Estado',
          'orden'           =>7,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-7-1-1-0007',
        ]);
        Columnasview::create([
          'nombre'          =>'estadoInterno_id',
          'descripcion'     =>'Estado Interno',
          'orden'           =>8,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-8-1-1-0008',
        ]);
        Columnasview::create([
          'nombre'          =>'sector_id',
          'descripcion'     =>'Sector',
          'orden'           =>9,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-9-1-1-0009',
        ]);
        Columnasview::create([
          'nombre'          =>'titular',
          'descripcion'     =>'Titular',
          'orden'           =>10,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-10-1-1-0010',
        ]);
        Columnasview::create([
          'nombre'          =>'monto',
          'descripcion'     =>'Monto',
          'orden'           =>11,
          'seleccionada'    => 'SI',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-11-1-1-0011',
        ]);
        Columnasview::create([
          'nombre'          =>'tamanio',
          'descripcion'     =>'Tamaño',
          'orden'           =>12,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-12-1-1-0012',
        ]);
        Columnasview::create([
          'nombre'          =>'tipo',
          'descripcion'     =>'Tipo',
          'orden'           =>13,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-13-1-1-0013',
        ]);
        Columnasview::create([
          'nombre'          =>'domicilioProyecto',
          'descripcion'     =>'Domicilio Proyecto',
          'orden'           =>14,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-14-1-1-0014',
        ]);
        Columnasview::create([
          'nombre'          =>'domicilioLegal',
          'descripcion'     =>'Domicilio Legal',
          'orden'           =>15,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-15-1-1-0015',
        ]);
        Columnasview::create([
          'nombre'          =>'telefono',
          'descripcion'     =>'Teléfono',
          'orden'           =>16,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-16-1-1-0016',
        ]);
        Columnasview::create([
          'nombre'          =>'email',
          'descripcion'     =>'E-mail',
          'orden'           =>17,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-17-1-1-0017',
        ]);
        Columnasview::create([
          'nombre'          =>'web',
          'descripcion'     =>'Web',
          'orden'           =>18,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-18-1-1-0018',
        ]);
        Columnasview::create([
          'nombre'          =>'productos',
          'descripcion'     =>'Productos',
          'orden'           =>19,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-19-1-1-0019',
        ]);
        Columnasview::create([
          'nombre'          =>'ciuu',
          'descripcion'     =>'CIUU',
          'orden'           =>20,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-20-1-1-0020',
        ]);
        Columnasview::create([
          'nombre'          =>'MO',
          'descripcion'     =>'M.O.',
          'orden'           =>21,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-21-1-1-0021',
        ]);
        Columnasview::create([
          'nombre'          =>'enUEP',
          'descripcion'     =>'En UEP',
          'orden'           =>22,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-22-1-1-0022',
        ]);
        Columnasview::create([
          'nombre'          =>'descripcion',
          'descripcion'     =>'Descripción',
          'orden'           =>23,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-23-1-1-0023',
        ]);
        Columnasview::create([
          'nombre'          =>'inversionTotal',
          'descripcion'     =>'Inv. Total',
          'orden'           =>24,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-24-1-1-0024',
        ]);
        Columnasview::create([
          'nombre'          =>'inversionRealizada',
          'descripcion'     =>'Inv. Realizada',
          'orden'           =>25,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-25-1-1-0025',
        ]);
        Columnasview::create([
          'nombre'          =>'inversionARealizar_ct',
          'descripcion'     =>'Inv. A Realizar CT',
          'orden'           =>26,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-26-1-1-0026',
        ]);
        Columnasview::create([
          'nombre'          =>'inversionARealizar_af',
          'descripcion'     =>'Inv. A Realizar AF',
          'orden'           =>27,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-27-1-1-0027',
        ]);
        Columnasview::create([
          'nombre'          =>'figuraLegal_id',
          'descripcion'     =>'Figura Legal',
          'orden'           =>28,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-28-1-1-0028',
        ]);
        Columnasview::create([
          'nombre'          =>'periodicidad_id',
          'descripcion'     =>'Periodicidad',
          'orden'           =>29,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-29-1-1-0029',
        ]);
        Columnasview::create([
          'nombre'          =>'destinoCredito_id',
          'descripcion'     =>'Destino Crédito',
          'orden'           =>30,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-30-1-1-0030',
        ]);
        Columnasview::create([
          'nombre'          =>'refinanciado',
          'descripcion'     =>'Refinanciado',
          'orden'           =>31,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-31-1-1-0031',
        ]);
        Columnasview::create([
          'nombre'          =>'plazoGracia',
          'descripcion'     =>'Gracia',
          'orden'           =>32,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-32-1-1-0032',
        ]);
        Columnasview::create([
          'nombre'          =>'plazoAmortizacion',
          'descripcion'     =>'Amortización',
          'orden'           =>33,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-33-1-1-0033',
        ]);
        Columnasview::create([
          'nombre'          =>'cantidadDesembolsos',
          'descripcion'     =>'Cant. Desembolsos',
          'orden'           =>34,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-34-1-1-0034',
        ]);
        Columnasview::create([
          'nombre'          =>'tasa',
          'descripcion'     =>'Tasa',
          'orden'           =>35,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-35-1-1-0035',
        ]);
        Columnasview::create([
          'nombre'          =>'garantia_id',
          'descripcion'     =>'Garantía',
          'orden'           =>36,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-36-1-1-0036',
        ]);
        Columnasview::create([
          'nombre'          =>'descripcionGarantia',
          'descripcion'     =>'Desc. Garantía',
          'orden'           =>37,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-37-1-1-0037',
        ]);
        Columnasview::create([
          'nombre'          =>'sujetoCredito',
          'descripcion'     =>'Sujeto Crédito',
          'orden'           =>38,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-38-1-1-0038',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaEnvioBanco',
          'descripcion'     =>'Envío Bco',
          'orden'           =>39,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-39-1-1-0039',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaRespuestaBanco',
          'descripcion'     =>'Resp. Bco',
          'orden'           =>40,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-40-1-1-0040',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaCaducoBanco',
          'descripcion'     =>'Caduco Bco',
          'orden'           =>41,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-41-1-1-0041',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaAprobadoUep',
          'descripcion'     =>'Aprobado UEP',
          'orden'           =>42,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-42-1-1-0042',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaEnviadoCfi',
          'descripcion'     =>'Enviado CFI',
          'orden'           =>43,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-43-1-1-0043',
        ]);
        Columnasview::create([
          'nombre'          =>'echaAprobadoCfi',
          'descripcion'     =>'Aprobado CFI',
          'orden'           =>44,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-44-1-1-0044',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaTramdispo',
          'descripcion'     =>'TramDispo',
          'orden'           =>45,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-45-1-1-0045',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaComunicaTran',
          'descripcion'     =>'ComunicaTran',
          'orden'           =>46,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-46-1-1-0046',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaDesembolso',
          'descripcion'     =>'Desembolso',
          'orden'           =>47,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-47-1-1-0047',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaEfectivizacion',
          'descripcion'     =>'Efectivización',
          'orden'           =>48,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-48-1-1-0048',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaDesistido',
          'descripcion'     =>'Desistido',
          'orden'           =>49,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-49-1-1-0049',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaJudicial',
          'descripcion'     =>'Judicial',
          'orden'           =>50,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-50-1-1-0050',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaCancelado',
          'descripcion'     =>'Cancelado',
          'orden'           =>51,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-51-1-1-0051',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaArchivado',
          'descripcion'     =>'Archivado',
          'orden'           =>52,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-52-1-1-0052',
        ]);
        Columnasview::create([
          'nombre'          =>'fechaUltimoMovimiento',
          'descripcion'     =>'Ult. Mov.',
          'orden'           =>53,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-53-1-1-0053',
        ]);
        Columnasview::create([
          'nombre'          =>'observaciones',
          'descripcion'     =>'Observaciones',
          'orden'           =>54,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-54-1-1-0054',
        ]);
        Columnasview::create([
          'nombre'          =>'sucursal_id',
          'descripcion'     =>'Sucursal',
          'orden'           =>55,
          'seleccionada'    => 'NO',
          'tabla'           =>'proyectos',
          'provincia_id'    => 1,
          'user_id'         =>1,
          'slug'            => 'columnasview-55-1-1-0055',
        ]);
    }
}
