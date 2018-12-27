<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('procedures')->insert([
            'name_procedure' => 'Certificado No Atentado contra la Autonomía Universitaria',
            'requirements_procedure' => '<p>&bull; Carta de solicitud dirigida al Secretario General de la UMSS&nbsp;(<strong>Dra. Carmen Quiroz G&oacute;mez- Secretaria General a.i</strong>).<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>20 Bs.</strong>)<br />
            &bull; Portar su C&eacute;dula de Identidad durante el proceso de tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Certificación de notas de colegio',
            'requirements_procedure' => '<p>&bull; Valorado de Caja Central de la UMSS.<br />
            &bull; Fotocopia de la libreta escolar (<strong>Anverso y Reverso</strong>).<br />
            &bull; Diploma de Bachiller (<strong>Documento original</strong>)</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Certificación de notas obtenidas por profesionales egresados en la UMSS',
            'requirements_procedure' => '<p>&bull; Valorado de Caja Central de la UMSS (<strong>10 Bs. por semestre/ 20 Bs. por a&ntilde;o</strong>)<br />
            &bull; Notas expedidas por &ldquo;Registros e Inscripciones&rdquo;</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Certificado de Acreditación Diploma de Bachiller',
            'requirements_procedure' => '<p>&bull; Valorado de Caja Central de la UMSS (<strong>100 Bs.</strong>)<br />
            &bull; Fotocopia de Diploma de Bachiller emitido por la UMSS para bachilleres egresados hasta la gesti&oacute;n 2009 (<strong>Anverso y reverso</strong>).</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => '<p>Bachilleres egresados a partir de la gesti&oacute;n 2009 realizar su tr&aacute;mite en<br />
            SEDUCA.</p>',
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Certificado de Acreditación Diploma Académico',
            'requirements_procedure' => '<p>&bull; Valorado de Caja Central de la UMSS (<strong>130 Bs</strong>.)<br />
            &bull; Fotocopia de Diploma Acad&eacute;mico(<strong>Anverso y reverso</strong>)</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Certificado de Acreditación Título en Provisión Nacional',
            'requirements_procedure' => '<p>&bull; Valorado de Caja Central de la UMSS (<strong>150 Bs</strong>.)<br />
            &bull; Fotocopia de Titulo en Provisi&oacute;n Nacional (<strong>Anverso y reverso</strong>)</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Certificado de Acreditación Título de Posgrado',
            'requirements_procedure' => '<p>&bull; Valorado de Caja Central de la UMSS (<strong>160 Bs.</strong>)<br />
            &bull; Fotocopia de Titulo de Posgrado (<strong>Anverso y reverso</strong>)</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Certificacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia de Diploma de Bachiller',
            'requirements_procedure' => '<p>&bull; Fotocopia de Diploma de Bachiller emitido por la UMSS (<strong>Anverso y reverso</strong>).<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>72 Bs. Nacional y 150 Bs. Extranjero</strong>).<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => '72',
            'advice' => '<p>Bachilleres egresados a partir de la gesti&oacute;n 2010 realizar su tr&aacute;mite en SEDUCA.</p>',
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia de Diploma Académico',
            'requirements_procedure' => '<p>&bull; Fotocopia de Diploma Acad&eacute;mico (<strong>Anverso y reverso</strong>).<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>112 Bs.</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia Titulo en Provisión Nacional',
            'requirements_procedure' => '<p>&bull; Fotocopia de Titulo en Provisi&oacute;n Nacional (<strong>Anverso y reverso</strong>).<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>132 Bs.</strong>).<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'D',
            'requirements_procedure' => '<p>&bull; Fotocopia de Titulo de Posgrado (<strong>Anverso y reverso</strong>).<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>162 Bs.</strong>).<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalizaciones para el PTAANG',
            'requirements_procedure' => '<p>&bull; Fotocopia Diploma de Bachiller (<strong>Anverso y reverso</strong>).<br />
            &bull; Fotocopia del valorado por pago al PTAANG.<br />
            &bull; Fotocopia del certificado de habilitaci&oacute;n para el tr&aacute;mite de t&iacute;tulo profesional.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>16 Bs.</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización de fotocopia de Carnet de Identidad',
            'requirements_procedure' => '<p>&bull; Fotocopia de Carnet de Identidad (<strong>Anverso y reverso</strong>)<br />
            &bull; C.I. (Documento original)<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>10 Bs.)</strong></p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '0',
            'external_time' => '0',
            'advice' => '<p>V&aacute;lido solo para tr&aacute;mite al interior de la UMSS.<br />
            Para inscripciones a las diferentes carreras.<br />
            Para postularse a los ex&aacute;menes de ingresos a la UMSS.<br />
            Para tramitar su Diploma Acad&eacute;mico.</p>',
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia libreta escolar P/Otras universidades',
            'requirements_procedure' => '<p>&bull; Fotocopia de la libreta escolar (<strong>Anverso y reverso).</strong><br />
            &bull; Valorado de Caja Central de la UMSS (<strong>32 Bs.)</strong>.<br />
            &bull; Diploma de Bachiller (<strong>Documento original</strong>).<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '0',
            'external_time' => '24',
            'advice' => '<p>Para universidades privadas, legalizaci&oacute;n de la libreta que se custodia junto al Diploma de Bachiller. Bachilleres egresados a partir de la gesti&oacute;n 2010 realizar su tr&aacute;mite en SEDUCA.</p>',
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia de Internado rotatorio',
            'requirements_procedure' => '<p>&bull; Fotocopia internado rotatorio.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>50 Bs.</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '72',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia RR-RCU-RS-RVR',
            'requirements_procedure' => '<p>&bull; Fotocopia RR-RCU-RS-RVR.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>20 Bs.</strong>)<br />
            &bull; Carta de solicitud dirigida al Secretario General de la UMSS (<strong>Dra. Carmen Quiroz G&oacute;mez- Secretaria General a.i</strong>).<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia RR por Excelencia',
            'requirements_procedure' => '<p>&bull; Fotocopia RR por Excelencia.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>50 Bs.</strong>)<br />
            &bull; Carta de solicitud dirigida al Secretario General de la UMSS (<strong>Dra. Carmen Quiroz G&oacute;mez- Secretaria General a.i</strong>).<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia RR que emite el Diploma Académico y Título en Provisión Nacional',
            'requirements_procedure' => '<p>&bull; Fotocopia que emite el Diploma Acad&eacute;mico y T&iacute;tulo en Provisi&oacute;n Nacional.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>50 Bs.</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia RR de reválida de Diploma Académico Extranjero',
            'requirements_procedure' => '<p>&bull; Fotocopia RR de rev&aacute;lida de Diploma Acad&eacute;mico Extranjero.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>150 Bs.</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización fotocopia RR que Homologa Cert. de Policías y Militares emitido por la UMSS',
            'requirements_procedure' => '<p>&bull; Fotocopia RR que Homologa Cert. de Polic&iacute;as y Militares<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>100 Bs.</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalización concentrado de Notas en General',
            'requirements_procedure' => '<p>&bull; Notas expedidas por &ldquo;<strong>Registros e Inscripciones</strong>&ldquo;.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>10 Bs. Notas Semestral/ 20 Bs. Notas Anual</strong>)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => null,
            'external_time' => '72',
            'advice' => null,
            'type_pro' => 'Legalizacion',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Búsqueda de Documentos Archivados',
            'requirements_procedure' => '<p>&bull; Fotocopia y referencias del documento.<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>10 Bs</strong>.)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Apostilla',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Transcripción notas de secundaria P/Otras universidades',
            'requirements_procedure' => '<p>&bull; Fotocopia libretas de secundaria (<strong>Anverso y reverso</strong>)<br />
            &bull; Valorado de Caja Central de la UMSS (<strong>100 Bs</strong>.)<br />
            &bull; Portar su c&eacute;dula de identidad durante el proceso del tr&aacute;mite.</p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '48',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Apostilla',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('procedures')->insert([
            'name_procedure' => 'Legalizaciones para el PTAANG',
            'requirements_procedure' => '<p>&bull; Fotocopia del Diploma de Bachiller (<strong>anverso y reverso</strong>)<br />
            &bull; Fotocopia del valorado por el pago al PTAANG.<br />
            &bull; Fotocopia del certificado de habilitaci&oacute;n para el tr&aacute;mite del t&iacute;tulo profesional.<br />
            &bull; Valorado de&nbsp;<strong>Bs. 16.</strong></p>',
            'img_procedure' => 'noimage.jpg',
            'internal_time' => '24',
            'external_time' => null,
            'advice' => null,
            'type_pro' => 'Apostilla',
            'posted_by' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
