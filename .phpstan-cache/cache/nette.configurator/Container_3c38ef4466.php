<?php
// source: phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/conf/config.levelmax.neon
// source: /Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/phpstan.neon.dist
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_3c38ef4466 extends _PHPStan_582a9cb8b\Nette\DI\Container
{
	protected $tags = [
		'phpstan.parser.richParserNodeVisitor' => [
			'04' => true,
			'05' => true,
			'06' => true,
			'07' => true,
			'08' => true,
			'09' => true,
			'010' => true,
			'011' => true,
			'012' => true,
			'067' => true,
			'0373' => true,
		],
		'phpstan.stubFilesExtension' => ['033' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['084' => true, '088' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'085' => true,
			'090' => true,
			'0204' => true,
			'0353' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['089' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0143' => true,
			'0144' => true,
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0163' => true,
			'0164' => true,
			'0165' => true,
			'0167' => true,
			'0168' => true,
			'0169' => true,
			'0170' => true,
			'0174' => true,
			'0175' => true,
			'0177' => true,
			'0178' => true,
			'0179' => true,
			'0181' => true,
			'0183' => true,
			'0184' => true,
			'0189' => true,
			'0190' => true,
			'0191' => true,
			'0192' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0206' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'0220' => true,
			'0221' => true,
			'0222' => true,
			'0223' => true,
			'0224' => true,
			'0225' => true,
			'0226' => true,
			'0227' => true,
			'0228' => true,
			'0229' => true,
			'0230' => true,
			'0232' => true,
			'0233' => true,
			'0234' => true,
			'0235' => true,
			'0236' => true,
			'0237' => true,
			'0238' => true,
			'0239' => true,
			'0250' => true,
			'0254' => true,
			'0255' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0262' => true,
			'0263' => true,
			'0354' => true,
			'0355' => true,
			'0356' => true,
			'0357' => true,
			'0358' => true,
			'0359' => true,
			'0360' => true,
			'0361' => true,
			'0362' => true,
			'0363' => true,
			'0364' => true,
			'0365' => true,
			'0366' => true,
			'0367' => true,
			'0368' => true,
			'0369' => true,
			'0370' => true,
			'0371' => true,
			'0372' => true,
			'0376' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0150' => true,
			'0166' => true,
			'0176' => true,
			'0203' => true,
			'0207' => true,
			'0208' => true,
			'0240' => true,
			'0241' => true,
			'0242' => true,
			'0243' => true,
			'0244' => true,
			'0245' => true,
			'0246' => true,
			'0247' => true,
			'0248' => true,
			'0249' => true,
			'0251' => true,
			'0253' => true,
			'0352' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0171' => true,
			'0173' => true,
			'0264' => true,
			'0270' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0172' => true,
			'0180' => true,
			'0185' => true,
			'0186' => true,
			'0188' => true,
			'0206' => true,
			'0231' => true,
			'0256' => true,
			'0257' => true,
			'0264' => true,
			'0265' => true,
			'0266' => true,
			'0267' => true,
			'0268' => true,
			'0269' => true,
			'0351' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0182' => true,
			'0187' => true,
			'0199' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0205' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0197' => true, '0198' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0214' => true, '0374' => true, '0375' => true],
		'phpstan.rules.rule' => [
			'0278' => true,
			'0279' => true,
			'0280' => true,
			'0281' => true,
			'0282' => true,
			'0283' => true,
			'0284' => true,
			'0285' => true,
			'0286' => true,
			'0287' => true,
			'0288' => true,
			'0289' => true,
			'0290' => true,
			'0291' => true,
			'0292' => true,
			'0293' => true,
			'0294' => true,
			'0295' => true,
			'0296' => true,
			'0297' => true,
			'0298' => true,
			'0299' => true,
			'0300' => true,
			'0302' => true,
			'0303' => true,
			'0304' => true,
			'0305' => true,
			'0306' => true,
			'0307' => true,
			'0309' => true,
			'0310' => true,
			'0311' => true,
			'0314' => true,
			'0315' => true,
			'0316' => true,
			'0317' => true,
			'0318' => true,
			'0319' => true,
			'0320' => true,
			'0321' => true,
			'0322' => true,
			'0323' => true,
			'0324' => true,
			'0325' => true,
			'0326' => true,
			'0327' => true,
			'0328' => true,
			'0329' => true,
			'0330' => true,
			'0331' => true,
			'0332' => true,
			'0333' => true,
			'0334' => true,
			'0335' => true,
			'0336' => true,
			'0337' => true,
			'0338' => true,
			'0339' => true,
			'0340' => true,
			'0341' => true,
			'0342' => true,
			'0343' => true,
			'0344' => true,
			'0345' => true,
			'0348' => true,
			'0349' => true,
			'0350' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.100' => true,
			'rules.101' => true,
			'rules.102' => true,
			'rules.103' => true,
			'rules.104' => true,
			'rules.105' => true,
			'rules.106' => true,
			'rules.107' => true,
			'rules.108' => true,
			'rules.109' => true,
			'rules.11' => true,
			'rules.110' => true,
			'rules.111' => true,
			'rules.112' => true,
			'rules.113' => true,
			'rules.114' => true,
			'rules.115' => true,
			'rules.116' => true,
			'rules.117' => true,
			'rules.118' => true,
			'rules.119' => true,
			'rules.12' => true,
			'rules.120' => true,
			'rules.121' => true,
			'rules.122' => true,
			'rules.123' => true,
			'rules.124' => true,
			'rules.125' => true,
			'rules.126' => true,
			'rules.127' => true,
			'rules.128' => true,
			'rules.129' => true,
			'rules.13' => true,
			'rules.130' => true,
			'rules.131' => true,
			'rules.132' => true,
			'rules.133' => true,
			'rules.134' => true,
			'rules.135' => true,
			'rules.136' => true,
			'rules.137' => true,
			'rules.138' => true,
			'rules.139' => true,
			'rules.14' => true,
			'rules.140' => true,
			'rules.141' => true,
			'rules.142' => true,
			'rules.143' => true,
			'rules.144' => true,
			'rules.145' => true,
			'rules.146' => true,
			'rules.147' => true,
			'rules.148' => true,
			'rules.149' => true,
			'rules.15' => true,
			'rules.150' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.45' => true,
			'rules.46' => true,
			'rules.47' => true,
			'rules.48' => true,
			'rules.49' => true,
			'rules.5' => true,
			'rules.50' => true,
			'rules.51' => true,
			'rules.52' => true,
			'rules.53' => true,
			'rules.54' => true,
			'rules.55' => true,
			'rules.56' => true,
			'rules.57' => true,
			'rules.58' => true,
			'rules.59' => true,
			'rules.6' => true,
			'rules.60' => true,
			'rules.61' => true,
			'rules.62' => true,
			'rules.63' => true,
			'rules.64' => true,
			'rules.65' => true,
			'rules.66' => true,
			'rules.67' => true,
			'rules.68' => true,
			'rules.69' => true,
			'rules.7' => true,
			'rules.70' => true,
			'rules.71' => true,
			'rules.72' => true,
			'rules.73' => true,
			'rules.74' => true,
			'rules.75' => true,
			'rules.76' => true,
			'rules.77' => true,
			'rules.78' => true,
			'rules.79' => true,
			'rules.8' => true,
			'rules.80' => true,
			'rules.81' => true,
			'rules.82' => true,
			'rules.83' => true,
			'rules.84' => true,
			'rules.85' => true,
			'rules.86' => true,
			'rules.87' => true,
			'rules.88' => true,
			'rules.89' => true,
			'rules.9' => true,
			'rules.90' => true,
			'rules.91' => true,
			'rules.92' => true,
			'rules.93' => true,
			'rules.94' => true,
			'rules.95' => true,
			'rules.96' => true,
			'rules.97' => true,
			'rules.98' => true,
			'rules.99' => true,
		],
		'phpstan.collector' => ['0346' => true, '0347' => true],
	];

	protected $types = ['container' => '_PHPStan_582a9cb8b\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_582a9cb8b\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'0105',
				'0106',
				'0108',
				'0109',
				'0122',
				'0278',
				'0279',
				'0280',
				'0281',
				'0282',
				'0283',
				'0284',
				'0285',
				'0286',
				'0287',
				'0288',
				'0289',
				'0290',
				'0291',
				'0292',
				'0293',
				'0294',
				'0295',
				'0296',
				'0297',
				'0298',
				'0299',
				'0300',
				'0301',
				'0302',
				'0303',
				'0304',
				'0305',
				'0306',
				'0307',
				'0309',
				'0310',
				'0311',
				'0312',
				'0313',
				'0314',
				'0315',
				'0316',
				'0317',
				'0318',
				'0319',
				'0320',
				'0321',
				'0322',
				'0323',
				'0324',
				'0325',
				'0326',
				'0327',
				'0328',
				'0329',
				'0330',
				'0331',
				'0332',
				'0333',
				'0334',
				'0335',
				'0336',
				'0337',
				'0338',
				'0339',
				'0340',
				'0341',
				'0342',
				'0343',
				'0344',
				'0345',
				'0348',
				'0349',
				'0350',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
				'rules.45',
				'rules.46',
				'rules.47',
				'rules.48',
				'rules.49',
				'rules.50',
				'rules.51',
				'rules.52',
				'rules.53',
				'rules.54',
				'rules.55',
				'rules.56',
				'rules.57',
				'rules.58',
				'rules.59',
				'rules.60',
				'rules.61',
				'rules.62',
				'rules.63',
				'rules.64',
				'rules.65',
				'rules.66',
				'rules.67',
				'rules.68',
				'rules.69',
				'rules.70',
				'rules.71',
				'rules.72',
				'rules.73',
				'rules.74',
				'rules.75',
				'rules.76',
				'rules.77',
				'rules.78',
				'rules.79',
				'rules.80',
				'rules.81',
				'rules.82',
				'rules.83',
				'rules.84',
				'rules.85',
				'rules.86',
				'rules.87',
				'rules.88',
				'rules.89',
				'rules.90',
				'rules.91',
				'rules.92',
				'rules.93',
				'rules.94',
				'rules.95',
				'rules.96',
				'rules.97',
				'rules.98',
				'rules.99',
				'rules.100',
				'rules.101',
				'rules.102',
				'rules.103',
				'rules.104',
				'rules.105',
				'rules.106',
				'rules.107',
				'rules.108',
				'rules.109',
				'rules.110',
				'rules.111',
				'rules.112',
				'rules.113',
				'rules.114',
				'rules.115',
				'rules.116',
				'rules.117',
				'rules.118',
				'rules.119',
				'rules.120',
				'rules.121',
				'rules.122',
				'rules.123',
				'rules.124',
				'rules.125',
				'rules.126',
				'rules.127',
				'rules.128',
				'rules.129',
				'rules.130',
				'rules.131',
				'rules.132',
				'rules.133',
				'rules.134',
				'rules.135',
				'rules.136',
				'rules.137',
				'rules.138',
				'rules.139',
				'rules.140',
				'rules.141',
				'rules.142',
				'rules.143',
				'rules.144',
				'rules.145',
				'rules.146',
				'rules.147',
				'rules.148',
				'rules.149',
				'rules.150',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['rules.1']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['rules.2']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['rules.3']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['rules.4']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['rules.5']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['rules.6']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['rules.7']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['rules.8']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['rules.9']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['rules.10']],
		'PHPStan\Rules\Arrays\EmptyArrayItemRule' => [['rules.11']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['rules.12']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['rules.13']],
		'PHPStan\Rules\Classes\AllowedSubTypesRule' => [['rules.14']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['rules.15']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['rules.16']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['rules.17']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['rules.18']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['rules.19']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['rules.20']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['rules.21']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['rules.22']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['rules.23']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['rules.24']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['rules.25']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['rules.26']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['rules.27']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['rules.28']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['rules.29']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['rules.30']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['rules.31']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['rules.32']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['rules.33']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['rules.34']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['rules.35']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['rules.36']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['rules.37']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['rules.38']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['rules.39']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['rules.40']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['rules.41']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['rules.42']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['rules.43']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['rules.44']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['rules.45']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['rules.46']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['rules.47']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['rules.48']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['rules.49']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['rules.50']],
		'PHPStan\Rules\Methods\FinalPrivateMethodRule' => [['rules.51']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['rules.52']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['rules.53']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['rules.54']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['rules.55']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['rules.56']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['rules.57']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['rules.58']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['rules.59']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['rules.60']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['rules.61']],
		'PHPStan\Rules\Variables\UnsetRule' => [['rules.62']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['rules.63']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [['rules.64']],
		'PHPStan\Rules\Constants\ConstantRule' => [['rules.65']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [['rules.66']],
		'PHPStan\Rules\Variables\EmptyRule' => [['rules.67']],
		'PHPStan\Rules\Variables\IssetRule' => [['rules.68']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['rules.69']],
		'PHPStan\Rules\Cast\EchoRule' => [['rules.70']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [['rules.71']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [['rules.72']],
		'PHPStan\Rules\Cast\PrintRule' => [['rules.73']],
		'PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule' => [['rules.74']],
		'PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule' => [['rules.75']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [['rules.76']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [['rules.77']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [['rules.78']],
		'PHPStan\Rules\Generics\EnumAncestorsRule' => [['rules.79']],
		'PHPStan\Rules\Generics\EnumTemplateTypeRule' => [['rules.80']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [['rules.81']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [['rules.82']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [['rules.83']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [['rules.84']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [['rules.85']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [['rules.86']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [['rules.87']],
		'PHPStan\Rules\Generics\UsedTraitsRule' => [['rules.88']],
		'PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule' => [['rules.89']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [['rules.90']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [['rules.91']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [['rules.92']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [['rules.93']],
		'PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule' => [['rules.94']],
		'PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule' => [['rules.95']],
		'PHPStan\Rules\PhpDoc\FunctionAssertRule' => [['rules.96']],
		'PHPStan\Rules\PhpDoc\MethodAssertRule' => [['rules.97']],
		'PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule' => [['rules.98']],
		'PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule' => [['rules.99']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [['rules.100']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [['rules.101']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [['rules.102']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [['rules.103']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [['rules.104']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [['rules.105']],
		'PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule' => [['rules.106']],
		'PHPStan\Rules\Arrays\ArrayDestructuringRule' => [['rules.107']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [['rules.108']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [['rules.109']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [['rules.110']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [['rules.111']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [['rules.112']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [['rules.113']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [['rules.114']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['rules.115']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [['rules.116']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [['rules.117']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [['rules.118']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule' => [['rules.119']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule' => [['rules.120']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [['rules.121']],
		'PHPStan\Rules\Variables\ThrowTypeRule' => [['rules.122']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [['rules.123']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [['rules.124']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [['rules.125']],
		'PHPStan\Rules\DeadCode\NoopRule' => [['rules.126']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [['rules.127']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['rules.128']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['rules.129']],
		'PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule' => [['rules.130']],
		'PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule' => [['rules.131']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule' => [['rules.132']],
		'PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule' => [['rules.133']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule' => [['rules.134']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule' => [['rules.135']],
		'PHPStan\Rules\Methods\NullsafeMethodCallRule' => [['rules.136']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [['rules.137']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [['rules.138']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [['rules.139']],
		'PHPStan\Rules\DateTimeInstantiationRule' => [['rules.140']],
		'PHPStan\Rules\Functions\ImplodeFunctionRule' => [['rules.141']],
		'PHPStan\Rules\Constants\MissingClassConstantTypehintRule' => [['rules.142']],
		'PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule' => [['rules.143']],
		'PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule' => [['rules.144']],
		'PHPStan\Rules\Methods\MissingMethodParameterTypehintRule' => [['rules.145']],
		'PHPStan\Rules\Methods\MissingMethodReturnTypehintRule' => [['rules.146']],
		'PHPStan\Rules\Properties\MissingPropertyTypehintRule' => [['rules.147']],
		'SzepeViktor\PHPStan\WordPress\HookCallbackRule' => [['rules.148']],
		'SzepeViktor\PHPStan\WordPress\HookDocsRule' => [['rules.149']],
		'SzepeViktor\PHPStan\WordPress\IsWpErrorRule' => [['rules.150']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [
			['03', '04', '05', '06', '07', '08', '09', '010', '011', '012', '013', '055', '067', '076', '0373'],
		],
		'PhpParser\NodeVisitor' => [
			['03', '04', '05', '06', '07', '08', '09', '010', '011', '012', '013', '055', '067', '076', '0373'],
		],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['04']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['05']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['06']],
		'PHPStan\Parser\ClosureArgVisitor' => [['07']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['08']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['09']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['010']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['011']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['012']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['013']],
		'PHPStan\Node\Printer\ExprPrinter' => [['014']],
		'PhpParser\PrettyPrinter\Standard' => [['015']],
		'PhpParser\PrettyPrinterAbstract' => [['015']],
		'PHPStan\Node\Printer\Printer' => [['015']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['016']],
		'PHPStan\Php\PhpVersion' => [['017']],
		'PHPStan\Php\PhpVersionFactory' => [['018']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['019']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['020']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['021']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['022']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['023']],
		'PHPStan\PhpDoc\ConstExprParserFactory' => [['024']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['025']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['026']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['027']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['028']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['029']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['030']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['031']],
		'PHPStan\PhpDoc\StubValidator' => [['032']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['033']],
		'PHPStan\PhpDoc\CountableStubFilesExtension' => [['033']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['034']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['034']],
		'PHPStan\Analyser\Analyser' => [['035']],
		'PHPStan\Analyser\FileAnalyser' => [['036']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['037']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['038']],
		'PHPStan\Analyser\InternalScopeFactory' => [['039']],
		'PHPStan\Analyser\LazyInternalScopeFactory' => [['039']],
		'PHPStan\Analyser\ScopeFactory' => [['040']],
		'PHPStan\Analyser\NodeScopeResolver' => [['041']],
		'PHPStan\Analyser\ConstantResolver' => [['042']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['043']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['044']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['045']],
		'PHPStan\Cache\Cache' => [['046']],
		'PHPStan\Collectors\Registry' => [['047']],
		'PHPStan\Collectors\RegistryFactory' => [['048']],
		'PHPStan\Command\AnalyseApplication' => [['049']],
		'PHPStan\Command\AnalyserRunner' => [['050']],
		'PHPStan\Command\FixerApplication' => [['051']],
		'PHPStan\Dependency\DependencyResolver' => [['052']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['053']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['054']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['055']],
		'PHPStan\DependencyInjection\Container' => [['056'], ['057']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['057']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['058']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['059']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['060']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['061']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['062']],
		'PHPStan\File\FileHelper' => [['063']],
		'PHPStan\File\FileExcluderFactory' => [['064']],
		'PHPStan\File\FileExcluderRawFactory' => [['065']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['066']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['067']],
		'PHPStan\Parallel\ParallelAnalyser' => [['068']],
		'PHPStan\Parallel\Scheduler' => [['069']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['070']],
		'PHPStan\Process\CpuCoreCounter' => [['071']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['072']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['073']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['074', '084', '086', '088']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['074']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['075', '085', '086', '090', '0204', '0353']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['075']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['076']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['077']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['078']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['079']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['080']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['081']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['082']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['083']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['084']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['085']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['086']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['087']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['088']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['089']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['089']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['090']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['091']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['092']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['093']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['097'], ['094', '095']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['094']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['095']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['096']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['098']],
		'PHPStan\Rules\AttributesCheck' => [['099']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0100']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0101']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0102']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0103']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0104'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0104']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0105']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0106']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0107']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0108']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0109']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0110']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0111']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0112']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0113']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0114']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0115']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0116']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0117']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0118']],
		'PHPStan\Rules\IssetCheck' => [['0119']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0120']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0121']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0122']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0123']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0124']],
		'PHPStan\Rules\NullsafeCheck' => [['0125']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0126']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0126']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0127']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0128']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0129']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0130']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0130']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0131']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0132']],
		'PHPStan\Rules\RuleLevelHelper' => [['0133']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0134']],
		'PHPStan\Type\FileTypeMapper' => [['0135']],
		'PHPStan\Type\TypeAliasResolver' => [['0136']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0137']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0138']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0163',
				'0164',
				'0165',
				'0167',
				'0168',
				'0169',
				'0170',
				'0174',
				'0175',
				'0177',
				'0178',
				'0179',
				'0181',
				'0183',
				'0184',
				'0189',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0206',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
				'0220',
				'0221',
				'0222',
				'0223',
				'0224',
				'0225',
				'0226',
				'0227',
				'0228',
				'0229',
				'0230',
				'0232',
				'0233',
				'0234',
				'0235',
				'0236',
				'0237',
				'0238',
				'0239',
				'0250',
				'0254',
				'0255',
				'0258',
				'0259',
				'0260',
				'0261',
				'0262',
				'0263',
				'0354',
				'0355',
				'0356',
				'0357',
				'0358',
				'0359',
				'0360',
				'0361',
				'0362',
				'0363',
				'0364',
				'0365',
				'0366',
				'0367',
				'0368',
				'0369',
				'0370',
				'0371',
				'0372',
				'0376',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0139']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0141']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0142']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0143']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0144']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0146']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0147']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0148']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0149']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0150',
				'0166',
				'0176',
				'0203',
				'0207',
				'0208',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0246',
				'0247',
				'0248',
				'0249',
				'0251',
				'0253',
				'0352',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0150',
				'0166',
				'0176',
				'0203',
				'0207',
				'0208',
				'0214',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0246',
				'0247',
				'0248',
				'0249',
				'0251',
				'0253',
				'0255',
				'0352',
				'0374',
				'0375',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0150']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0151']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0155']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0156']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0163']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0164']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0165']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0166']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0167']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0169']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0170']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0171', '0173', '0264', '0270']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0171']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'0172',
				'0180',
				'0185',
				'0186',
				'0188',
				'0206',
				'0231',
				'0256',
				'0257',
				'0264',
				'0265',
				'0266',
				'0267',
				'0268',
				'0269',
				'0351',
			],
		],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0173']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0174']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0175']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0176']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0178']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0179']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0180']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0181']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [['0182', '0187', '0199', '0200', '0201', '0202', '0205']],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0182']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0184']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0185', '0186']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0187']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0192']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0196']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0197', '0198']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0197']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0198']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0199']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0200']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0201']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0202']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0203']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0204']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0205']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0206']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0207']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0208']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0212']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0213']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0214', '0374', '0375']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0214']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0216']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0217']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0218']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0219']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0220']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0221']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0222']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0223']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0224']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0225']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0231']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0232']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0233']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0234']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0235']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0236']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0237']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0238']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0239']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0240']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0241']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0242']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0243']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0244']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0245']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0246']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0247']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0248']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0249']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0250']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0251']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0252']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0253']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0254']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0255']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0257']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0258']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0259']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0260']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0261']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0262']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0263']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0264']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0265', '0266', '0267', '0268', '0269']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0270']],
		'PHPStan\Type\ClosureTypeFactory' => [['0271']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [['reflectionProvider'], ['broker'], [2 => 'betterReflectionProvider']],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'currentPhpVersionRichParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionSimpleDirectParser',
				'defaultAnalysisParser',
				'php8Parser',
				'pathRoutingParser',
			],
		],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleDirectParser', 'php8Parser']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser']],
		'PhpParser\Parser' => [2 => ['phpParserDecorator', 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['originalBetterReflectionReflector'],
			2 => [
				1 => 'betterReflectionReflector',
				'betterReflectionClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'nodeScopeResolverReflector',
			],
		],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [['originalBetterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			2 => ['betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [2 => ['betterReflectionClassReflector']],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0272']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0273']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0274']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0275', '0276']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0275']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0276']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
			['0277'],
		],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['0277']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Rules\Api\ApiClassConstFetchRule' => [['0278']],
		'PHPStan\Rules\Api\ApiInstanceofRule' => [['0279']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['0280']],
		'PHPStan\Rules\Api\RuntimeReflectionFunctionRule' => [['0281']],
		'PHPStan\Rules\Api\RuntimeReflectionInstantiationRule' => [['0282']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0283']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0284']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0285']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0286']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0287']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0288']],
		'PHPStan\Rules\Methods\ConsistentConstructorRule' => [['0289']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0290']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0291']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0292']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0293']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0294']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0295']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0296']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0297']],
		'PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule' => [['0298']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0299']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule' => [['0300']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0301']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0302']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0303']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0304']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0305']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0306']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['0307']],
		'PHPStan\Reflection\ConstructorsHelper' => [['0308']],
		'PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule' => [['0309']],
		'PHPStan\Rules\Classes\MixinRule' => [['0310']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0311']],
		'PHPStan\Rules\Methods\IllegalConstructorMethodCallRule' => [['0312']],
		'PHPStan\Rules\Methods\IllegalConstructorStaticCallRule' => [['0313']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0314']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0315']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0316']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0317']],
		'PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule' => [['0318']],
		'PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule' => [['0319']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0320']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0321']],
		'PHPStan\Rules\Arrays\ArrayUnpackingRule' => [['0322']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule' => [['0323']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule' => [['0324']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0325']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0326']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0327']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0328']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0329']],
		'PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule' => [['0330']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0331']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0332']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0333']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0334']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0335']],
		'PHPStan\Rules\Comparison\MatchExpressionRule' => [['0336']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0337']],
		'PHPStan\Rules\Comparison\ConstantLooseComparisonRule' => [['0338']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0339']],
		'PHPStan\Rules\Comparison\UnreachableIfBranchesRule' => [['0340']],
		'PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule' => [['0341']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule' => [['0342']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule' => [['0343']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0344']],
		'PHPStan\Rules\Properties\NullsafePropertyFetchRule' => [['0345']],
		'PHPStan\Collectors\Collector' => [['0346', '0347']],
		'PHPStan\Rules\Traits\TraitDeclarationCollector' => [['0346']],
		'PHPStan\Rules\Traits\TraitUseCollector' => [['0347']],
		'PHPStan\Rules\Traits\NotAnalysedTraitRule' => [['0348']],
		'PHPStan\Rules\Functions\RandomIntParametersRule' => [['0349']],
		'PHPStan\Rules\Functions\ArrayFilterRule' => [['0350']],
		'SzepeViktor\PHPStan\WordPress\WpThemeGetDynamicMethodReturnTypeExtension' => [['0351']],
		'SzepeViktor\PHPStan\WordPress\IsWpErrorFunctionTypeSpecifyingExtension' => [['0352']],
		'SzepeViktor\PHPStan\WordPress\WpThemeMagicPropertiesClassReflectionExtension' => [['0353']],
		'SzepeViktor\PHPStan\WordPress\GetListTableDynamicFunctionReturnTypeExtension' => [['0354']],
		'SzepeViktor\PHPStan\WordPress\RedirectCanonicalDynamicFunctionReturnTypeExtension' => [['0355']],
		'SzepeViktor\PHPStan\WordPress\StringOrArrayDynamicFunctionReturnTypeExtension' => [['0356']],
		'SzepeViktor\PHPStan\WordPress\GetTermsDynamicFunctionReturnTypeExtension' => [['0357']],
		'SzepeViktor\PHPStan\WordPress\GetPostDynamicFunctionReturnTypeExtension' => [['0358']],
		'SzepeViktor\PHPStan\WordPress\GetPostsDynamicFunctionReturnTypeExtension' => [['0359']],
		'SzepeViktor\PHPStan\WordPress\GetSitesDynamicFunctionReturnTypeExtension' => [['0360']],
		'SzepeViktor\PHPStan\WordPress\GetTaxonomiesDynamicFunctionReturnTypeExtension' => [['0361']],
		'SzepeViktor\PHPStan\WordPress\GetObjectTaxonomiesDynamicFunctionReturnTypeExtension' => [['0362']],
		'SzepeViktor\PHPStan\WordPress\GetCommentDynamicFunctionReturnTypeExtension' => [['0363']],
		'SzepeViktor\PHPStan\WordPress\HasFilterDynamicFunctionReturnTypeExtension' => [['0364']],
		'SzepeViktor\PHPStan\WordPress\ShortcodeAttsDynamicFunctionReturnTypeExtension' => [['0365']],
		'SzepeViktor\PHPStan\WordPress\MySQL2DateDynamicFunctionReturnTypeExtension' => [['0366']],
		'SzepeViktor\PHPStan\WordPress\CurrentTimeDynamicFunctionReturnTypeExtension' => [['0367']],
		'SzepeViktor\PHPStan\WordPress\ApplyFiltersDynamicFunctionReturnTypeExtension' => [['0368']],
		'SzepeViktor\PHPStan\WordPress\EchoParameterDynamicFunctionReturnTypeExtension' => [['0369']],
		'SzepeViktor\PHPStan\WordPress\WPErrorParameterDynamicFunctionReturnTypeExtension' => [['0370']],
		'SzepeViktor\PHPStan\WordPress\TermExistsDynamicFunctionReturnTypeExtension' => [['0371']],
		'SzepeViktor\PHPStan\WordPress\WpParseUrlFunctionDynamicReturnTypeExtension' => [['0372']],
		'SzepeViktor\PHPStan\WordPress\HookDocsVisitor' => [['0373']],
		'SzepeViktor\PHPStan\WordPress\AssertWpErrorTypeSpecifyingExtension' => [['0374']],
		'SzepeViktor\PHPStan\WordPress\AssertNotWpErrorTypeSpecifyingExtension' => [['0375']],
		'Understrap\PHPStan\GetThemeModReturnType' => [['0376']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrapFiles' => [
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/szepeviktor/phpstan-wordpress/bootstrap.php',
			],
			'excludes_analyse' => [],
			'excludePaths' => [
				'analyseAndScan' => [
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/deprecated.php',
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/class-wp-bootstrap-navwalker.php',
				],
				'analyse' => [],
			],
			'level' => 'max',
			'paths' => ['/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc'],
			'exceptions' => [
				'implicitThrows' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => true,
				'disableRuntimeReflectionProvider' => true,
				'skipCheckGenericClasses' => [
					'DatePeriod',
					'CallbackFilterIterator',
					'FilterIterator',
					'RecursiveCallbackFilterIterator',
					'AppendIterator',
					'NoRewindIterator',
					'LimitIterator',
					'InfiniteIterator',
					'CachingIterator',
					'RegexIterator',
				],
				'explicitMixedInUnknownGenericNew' => true,
				'explicitMixedForGlobalVariables' => true,
				'explicitMixedViaIsArray' => true,
				'arrayFilter' => true,
				'arrayUnpacking' => true,
				'nodeConnectingVisitorCompatibility' => false,
				'nodeConnectingVisitorRule' => true,
				'illegalConstructorMethodCall' => false,
				'disableCheckMissingIterableValueType' => true,
				'strictUnnecessaryNullsafePropertyFetch' => true,
				'looseComparison' => true,
				'consistentConstructor' => true,
				'checkUnresolvableParameterTypes' => true,
				'readOnlyByPhpDoc' => true,
				'phpDocParserRequireWhitespaceBeforeDescription' => true,
				'runtimeReflectionRules' => true,
				'notAnalysedTrait' => true,
				'curlSetOptTypes' => true,
				'listType' => true,
				'missingMagicSerializationRule' => true,
				'nullContextForVoidReturningFunctions' => true,
				'unescapeStrings' => true,
				'duplicateStubs' => true,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => true,
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkAlwaysTrueLooseComparison' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => true,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => true,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => true,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => true,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => true,
			'checkArgumentsPassedByReference' => true,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => true,
			'checkThisOnly' => false,
			'checkUnionTypes' => true,
			'checkBenevolentUnionTypes' => false,
			'checkListType' => true,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingTypehints' => true,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => true,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'rememberPossiblyImpureFunctionValues' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [
				[
					'message' => '#^Function understrap_generate_color_palette\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/block-editor.php',
				],
				[
					'message' => '#^Function understrap_bootstrap_comment_form_fields\(\) has parameter \$fields with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/custom-comments.php',
				],
				[
					'message' => '#^Function understrap_bootstrap_comment_form_fields\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/custom-comments.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_before_init\(\) has parameter \$settings with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_before_init\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_blockquote_button\(\) has parameter \$buttons with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_blockquote_button\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_style_formats\(\) has parameter \$buttons with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_style_formats\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_body_classes\(\) has parameter \$classes with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/extras.php',
				],
				[
					'message' => '#^Function understrap_body_classes\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/extras.php',
				],
				[
					'message' => '#^Parameter \#2 \$callback of function add_filter expects callable\(\)\: mixed, \'understrap_adjust…\' given\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/extras.php',
				],
				[
					'message' => '#^Function understrap_pagination\(\) has parameter \$args with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/pagination.php',
				],
				[
					'message' => '#^Function understrap_get_theme_default_settings\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/theme-settings.php',
				],
				[
					'message' => '#^Function understrap_add_block_widget_archives_classes\(\) has parameter \$block with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_block_widget_categories_class\(\) has parameter \$parsed_args with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_block_widget_search_classes\(\) has parameter \$block with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_widget_categories_class\(\) has parameter \$cat_args with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_widget_categories_class\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_hero_active_carousel_item\(\) has parameter \$params with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_hero_active_carousel_item\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_widget_classes\(\) has parameter \$params with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_widget_classes\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Cannot access an offset on mixed\.$#',
					'count' => 10,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Cannot access offset \'aria\-hidden\' on mixed\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Cannot access offset \'data\-allow\-clear\' on mixed\.$#',
					'count' => 2,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Cannot access offset \'data\-plugin\' on mixed\.$#',
					'count' => 2,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Function understrap_quantity_input_classes\(\) has parameter \$classes with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Function understrap_quantity_input_classes\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Part \$args\[\'label\'\] \(mixed\) of encapsed string cannot be cast to string\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				'#Function understrap_block_editor_setup\(\) has no return type specified.#',
				'#Function understrap_custom_header_setup\(\) has no return type specified.#',
				'#Function understrap_comment_form_comments_closed\(\) has no return type specified.#',
				'#Function understrap_customize_register\(\) has no return type specified.#',
				'#Function understrap_theme_customize_register\(\) has no return type specified.#',
				'#Function understrap_customize_preview_js\(\) has no return type specified.#',
				'#Function understrap_customize_controls_js\(\) has no return type specified.#',
				'#Function understrap_wpdocs_theme_add_editor_styles\(\) has no return type specified.#',
				'#Function understrap_scripts\(\) has no return type specified.#',
				'#Function understrap_pingback\(\) has no return type specified.#',
				'#Function understrap_mobile_web_app_meta\(\) has no return type specified.#',
				'#Function understrap_add_site_info\(\) has no return type specified.#',
				'#Function understrap_site_info\(\) has no return type specified.#',
				'#Function understrap_components_jetpack_setup\(\) has no return type specified.#',
				'#Function understrap_components_infinite_scroll_render\(\) has no return type specified.#',
				'#Function understrap_components_social_menu\(\) has no return type specified.#',
				'#Function understrap_pagination\(\) has no return type specified.#',
				'#Function understrap_setup\(\) has no return type specified.#',
				'#Function understrap_posted_on\(\) has no return type specified.#',
				'#Function understrap_entry_footer\(\) has no return type specified.#',
				'#Function understrap_category_transient_flusher\(\) has no return type specified.#',
				'#Function understrap_body_attributes\(\) has no return type specified.#',
				'#Function understrap_comment_navigation\(\) has no return type specified.#',
				'#Function understrap_edit_post_link\(\) has no return type specified.#',
				'#Function understrap_post_nav\(\) has no return type specified.#',
				'#Function understrap_setup_theme_default_settings\(\) has no return type specified.#',
				'#Function understrap_widgets_init\(\) has no return type specified.#',
				'#Function understrap_woocommerce_support\(\) has no return type specified.#',
				'#Function understrap_woocommerce_wrapper_start\(\) has no return type specified.#',
				'#Function understrap_woocommerce_wrapper_end\(\) has no return type specified.#',
				'#Function understrap_wpcom_setup\(\) has no return type specified.#',
				'#Function understrap_wpcom_styles\(\) has no return type specified.#',
				'#Function understrap_categories_tags_list\(\) has no return type specified.#',
				'#Function understrap_categories_list\(\) has no return type specified.#',
				'#Function understrap_tags_list\(\) has no return type specified.#',
				'#Function understrap_comments_popup_link\(\) has no return type specified.#',
				'#Function understrap_offcanvas_admin_bar_inline_styles\(\) has no return type specified.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
			],
			'earlyTerminatingMethodCalls' => [
				'\Custom_Background' => ['Custom_Background::wp_set_background_image'],
				'\IXR_Server' => ['IXR_Server::output'],
				'\WP_Ajax_Response' => ['WP_Ajax_Response::send'],
				'\WP_CLI' => ['WP_CLI::error', 'WP_CLI::halt'],
				'\WP_Recovery_Mode' => ['WP_Recovery_Mode::redirect_protected'],
				'\WP_Sitemaps_Stylesheet' => ['WP_Sitemaps_Stylesheet::render_stylesheet'],
			],
			'earlyTerminatingFunctionCalls' => [
				'wp_die',
				'wp_send_json',
				'wp_send_json_success',
				'wp_send_json_error',
				'wp_nonce_ays',
				'comment_footer_die',
				'dead_db',
				'do_favicon',
				'install_theme_information',
				'media_send_to_editor',
				'redirect_post',
				'wp_ajax_heartbeat',
				'wp_ajax_nopriv_heartbeat',
			],
			'memoryLimitFile' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/.memory_limit',
			'tempResultCachePath' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/resultCaches',
			'resultCachePath' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'staticReflectionClassNamePatterns' => [],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'WP_DEBUG',
				'WP_DEBUG_LOG',
				'EMPTY_TRASH_DAYS',
				'WP_CLI',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'errorFormat' => null,
			'__validate' => true,
			'tmpDir' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache',
			'rootDir' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/conf/config.levelmax.neon',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/phpstan.neon.dist',
			],
			'composerAutoloaderProjectPaths' => [
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/..',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			],
			'generateBaselineFile' => null,
			'usedLevel' => 'max',
			'cliAutoloadFile' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/src/phpstan/autoload.php',
			'fixerTmpDir' => '/var/folders/6l/mfmtq2px1v93z1tc6lgvnw9w0000gn/T/phpstan-fixer',
			'singleReflectionFile' => null,
			'singleReflectionInsteadOfFile' => null,
			'analysedPaths' => null,
			'analysedPathsFromConfig' => null,
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('017'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(null, ['preserveOriginalNames' => true]);
	}


	public function createService04(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService05(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService06(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService07(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService08(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService09(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService010(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService011(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService012(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService013(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService014(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('015'));
	}


	public function createService015(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService016(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('063'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService017(): PHPStan\Php\PhpVersion
	{
		return $this->getService('018')->create();
	}


	public function createService018(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('019')->create();
	}


	public function createService019(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			null,
			[
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/..',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			]
		);
	}


	public function createService020(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService021(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('022'));
	}


	public function createService022(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return $this->getService('024')->create();
	}


	public function createService023(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('021'), $this->getService('022'), true);
	}


	public function createService024(): PHPStan\PhpDoc\ConstExprParserFactory
	{
		return new PHPStan\PhpDoc\ConstExprParserFactory(true);
	}


	public function createService025(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0135'), $this->getService('stubPhpDocProvider'));
	}


	public function createService026(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('029'), $this->getService('028'), $this->getService('0129'));
	}


	public function createService027(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('020'), $this->getService('023'));
	}


	public function createService028(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService029(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('030'),
			$this->getService('091'),
			$this->getService('0137'),
			$this->getService('042'),
			$this->getService('073')
		);
	}


	public function createService030(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('056'));
	}


	public function createService031(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('020'), $this->getService('021'), $this->getService('029'));
	}


	public function createService032(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('058'), true);
	}


	public function createService033(): PHPStan\PhpDoc\CountableStubFilesExtension
	{
		return new PHPStan\PhpDoc\CountableStubFilesExtension(true);
	}


	public function createService034(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('056'),
			[
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
			],
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child'
		);
	}


	public function createService035(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('036'),
			$this->getService('registry'),
			$this->getService('047'),
			$this->getService('041'),
			50
		);
	}


	public function createService036(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('040'),
			$this->getService('041'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('052'),
			$this->getService('037'),
			true
		);
	}


	public function createService037(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer;
	}


	public function createService038(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper(
			$this->getService('063'),
			[
				[
					'message' => '#^Function understrap_generate_color_palette\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/block-editor.php',
				],
				[
					'message' => '#^Function understrap_bootstrap_comment_form_fields\(\) has parameter \$fields with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/custom-comments.php',
				],
				[
					'message' => '#^Function understrap_bootstrap_comment_form_fields\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/custom-comments.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_before_init\(\) has parameter \$settings with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_before_init\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_blockquote_button\(\) has parameter \$buttons with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_blockquote_button\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_style_formats\(\) has parameter \$buttons with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_tiny_mce_style_formats\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/editor.php',
				],
				[
					'message' => '#^Function understrap_body_classes\(\) has parameter \$classes with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/extras.php',
				],
				[
					'message' => '#^Function understrap_body_classes\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/extras.php',
				],
				[
					'message' => '#^Parameter \#2 \$callback of function add_filter expects callable\(\)\: mixed, \'understrap_adjust…\' given\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/extras.php',
				],
				[
					'message' => '#^Function understrap_pagination\(\) has parameter \$args with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/pagination.php',
				],
				[
					'message' => '#^Function understrap_get_theme_default_settings\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/theme-settings.php',
				],
				[
					'message' => '#^Function understrap_add_block_widget_archives_classes\(\) has parameter \$block with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_block_widget_categories_class\(\) has parameter \$parsed_args with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_block_widget_search_classes\(\) has parameter \$block with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_widget_categories_class\(\) has parameter \$cat_args with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_add_widget_categories_class\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_hero_active_carousel_item\(\) has parameter \$params with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_hero_active_carousel_item\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_widget_classes\(\) has parameter \$params with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Function understrap_widget_classes\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/widgets.php',
				],
				[
					'message' => '#^Cannot access an offset on mixed\.$#',
					'count' => 10,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Cannot access offset \'aria\-hidden\' on mixed\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Cannot access offset \'data\-allow\-clear\' on mixed\.$#',
					'count' => 2,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Cannot access offset \'data\-plugin\' on mixed\.$#',
					'count' => 2,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Function understrap_quantity_input_classes\(\) has parameter \$classes with no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Function understrap_quantity_input_classes\(\) return type has no value type specified in iterable type array\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				[
					'message' => '#^Part \$args\[\'label\'\] \(mixed\) of encapsed string cannot be cast to string\.$#',
					'count' => 1,
					'path' => '/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/woocommerce.php',
				],
				'#Function understrap_block_editor_setup\(\) has no return type specified.#',
				'#Function understrap_custom_header_setup\(\) has no return type specified.#',
				'#Function understrap_comment_form_comments_closed\(\) has no return type specified.#',
				'#Function understrap_customize_register\(\) has no return type specified.#',
				'#Function understrap_theme_customize_register\(\) has no return type specified.#',
				'#Function understrap_customize_preview_js\(\) has no return type specified.#',
				'#Function understrap_customize_controls_js\(\) has no return type specified.#',
				'#Function understrap_wpdocs_theme_add_editor_styles\(\) has no return type specified.#',
				'#Function understrap_scripts\(\) has no return type specified.#',
				'#Function understrap_pingback\(\) has no return type specified.#',
				'#Function understrap_mobile_web_app_meta\(\) has no return type specified.#',
				'#Function understrap_add_site_info\(\) has no return type specified.#',
				'#Function understrap_site_info\(\) has no return type specified.#',
				'#Function understrap_components_jetpack_setup\(\) has no return type specified.#',
				'#Function understrap_components_infinite_scroll_render\(\) has no return type specified.#',
				'#Function understrap_components_social_menu\(\) has no return type specified.#',
				'#Function understrap_pagination\(\) has no return type specified.#',
				'#Function understrap_setup\(\) has no return type specified.#',
				'#Function understrap_posted_on\(\) has no return type specified.#',
				'#Function understrap_entry_footer\(\) has no return type specified.#',
				'#Function understrap_category_transient_flusher\(\) has no return type specified.#',
				'#Function understrap_body_attributes\(\) has no return type specified.#',
				'#Function understrap_comment_navigation\(\) has no return type specified.#',
				'#Function understrap_edit_post_link\(\) has no return type specified.#',
				'#Function understrap_post_nav\(\) has no return type specified.#',
				'#Function understrap_setup_theme_default_settings\(\) has no return type specified.#',
				'#Function understrap_widgets_init\(\) has no return type specified.#',
				'#Function understrap_woocommerce_support\(\) has no return type specified.#',
				'#Function understrap_woocommerce_wrapper_start\(\) has no return type specified.#',
				'#Function understrap_woocommerce_wrapper_end\(\) has no return type specified.#',
				'#Function understrap_wpcom_setup\(\) has no return type specified.#',
				'#Function understrap_wpcom_styles\(\) has no return type specified.#',
				'#Function understrap_categories_tags_list\(\) has no return type specified.#',
				'#Function understrap_categories_list\(\) has no return type specified.#',
				'#Function understrap_tags_list\(\) has no return type specified.#',
				'#Function understrap_comments_popup_link\(\) has no return type specified.#',
				'#Function understrap_offcanvas_admin_bar_inline_styles\(\) has no return type specified.#',
			],
			true
		);
	}


	public function createService039(): PHPStan\Analyser\LazyInternalScopeFactory
	{
		return new PHPStan\Analyser\LazyInternalScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('056'));
	}


	public function createService040(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('039'));
	}


	public function createService041(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('073'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('059'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0135'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('017'),
			$this->getService('025'),
			$this->getService('063'),
			$this->getService('typeSpecifier'),
			$this->getService('062'),
			$this->getService('0130'),
			true,
			true,
			[
				'\Custom_Background' => ['Custom_Background::wp_set_background_image'],
				'\IXR_Server' => ['IXR_Server::output'],
				'\WP_Ajax_Response' => ['WP_Ajax_Response::send'],
				'\WP_CLI' => ['WP_CLI::error', 'WP_CLI::halt'],
				'\WP_Recovery_Mode' => ['WP_Recovery_Mode::redirect_protected'],
				'\WP_Sitemaps_Stylesheet' => ['WP_Sitemaps_Stylesheet::render_stylesheet'],
			],
			[
				'wp_die',
				'wp_send_json',
				'wp_send_json_success',
				'wp_send_json_error',
				'wp_nonce_ays',
				'comment_footer_die',
				'dead_db',
				'do_favicon',
				'install_theme_information',
				'media_send_to_editor',
				'redirect_post',
				'wp_ajax_heartbeat',
				'wp_ajax_nopriv_heartbeat',
			],
			true
		);
	}


	public function createService042(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('043')->create();
	}


	public function createService043(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('091'), $this->getService('056'));
	}


	public function createService044(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('053'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('034'),
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/resultCache.php',
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/resultCaches',
					$this->container->parameters['analysedPaths'],
					[
						'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/..',
						'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
					],
					'max',
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/src/phpstan/autoload.php',
					[
						'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
						'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/szepeviktor/phpstan-wordpress/bootstrap.php',
					],
					[],
					[],
					$fileReplacements,
					false
				);
			}
		};
	}


	public function createService045(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer(
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/resultCache.php',
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/resultCaches'
		);
	}


	public function createService046(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService047(): PHPStan\Collectors\Registry
	{
		return $this->getService('048')->create();
	}


	public function createService048(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('056'));
	}


	public function createService049(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('050'),
			$this->getService('032'),
			$this->getService('044'),
			$this->getService('038'),
			50,
			$this->getService('034'),
			$this->getService('registry'),
			$this->getService('040'),
			$this->getService('037')
		);
	}


	public function createService050(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('069'),
			$this->getService('035'),
			$this->getService('068'),
			$this->getService('071')
		);
	}


	public function createService051(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('066'),
			$this->getService('044'),
			$this->getService('045'),
			$this->getService('038'),
			$this->getService('071'),
			$this->getService('069'),
			$this->parameters['analysedPaths'],
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			'/var/folders/6l/mfmtq2px1v93z1tc6lgvnw9w0000gn/T/phpstan-fixer',
			32
		);
	}


	public function createService052(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('063'),
			$this->getService('reflectionProvider'),
			$this->getService('054'),
			$this->getService('0135')
		);
	}


	public function createService053(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('055'));
	}


	public function createService054(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0135'), $this->getService('014'));
	}


	public function createService055(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('054'));
	}


	public function createService056(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('057'));
	}


	public function createService057(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService058(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache',
			[
				'phar:///Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/phpstan.phar/conf/config.levelmax.neon',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/phpstan.neon.dist',
			],
			$this->parameters['analysedPaths'],
			[
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/..',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			],
			$this->parameters['analysedPathsFromConfig'],
			'max',
			null,
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/src/phpstan/autoload.php',
			$this->parameters['singleReflectionFile'],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createService059(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('056'));
	}


	public function createService060(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('056'));
	}


	public function createService061(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('056'));
	}


	public function createService062(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('056'));
	}


	public function createService063(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child');
	}


	public function createService064(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory(
			$this->getService('065'),
			[],
			[
				'analyseAndScan' => [
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/deprecated.php',
					'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/inc/class-wp-bootstrap-navwalker.php',
				],
				'analyse' => [],
			]
		);
	}


	public function createService065(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('063'), $this->container->getService('034'), $analyseExcludes);
			}
		};
	}


	public function createService066(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService067(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService068(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService069(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService070(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService071(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService072(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?string $phpDocComment,
				array $phpDocParameterOutTypes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('073'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('070'),
					$this->container->getService('046'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure,
					$asserts,
					$phpDocComment,
					$phpDocParameterOutTypes
				);
			}
		};
	}


	public function createService073(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('042'),
			$this->getService('091'),
			$this->getService('017'),
			$this->getService('061')
		);
	}


	public function createService074(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService075(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService076(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService077(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('076'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService078(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('080'),
			$this->getService('081'),
			$this->getService('079')
		);
	}


	public function createService079(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('077'),
			$this->getService('fileFinderScan'),
			$this->getService('017')
		);
	}


	public function createService080(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('079'));
	}


	public function createService081(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('083'));
			}
		};
	}


	public function createService082(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('077'),
					$fileName
				);
			}
		};
	}


	public function createService083(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('082'));
	}


	public function createService084(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService085(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService086(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('040'),
			$this->getService('041'),
			$this->getService('087'),
			$this->getService('025'),
			$this->getService('074'),
			$this->getService('075'),
			$this->getService('097'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('091'),
			$this->getService('0135'),
			false,
			['stdClass']
		);
	}


	public function createService087(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('073'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('070'),
					$this->container->getService('046'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes
				);
			}
		};
	}


	public function createService088(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService089(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService090(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass'],
			$this->getService('075')
		);
	}


	public function createService091(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('056'));
	}


	public function createService092(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('097'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0135'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService093(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('031'));
	}


	public function createService094(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('093'),
			$this->getService('073'),
			$this->getService('017')
		);
	}


	public function createService095(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('094'),
			$this->getService('077'),
			$this->getService('0135'),
			$this->getService('017'),
			$this->getService('073')
		);
	}


	public function createService096(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('017'),
			$this->getService('094'),
			$this->getService('095')
		);
	}


	public function createService097(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('096')->create();
	}


	public function createService098(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService099(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0111'),
			$this->getService('0101')
		);
	}


	public function createService0100(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0133'), true, true);
	}


	public function createService0101(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0102(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0103'), true);
	}


	public function createService0103(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true,
			true
		);
	}


	public function createService0104(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService0105(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0107'));
	}


	public function createService0106(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0107'));
	}


	public function createService0107(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0108(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0110'));
	}


	public function createService0109(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0135'), $this->getService('0110'));
	}


	public function createService0110(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService0111(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0133'),
			$this->getService('0125'),
			$this->getService('017'),
			$this->getService('0129'),
			$this->getService('0132'),
			true,
			true,
			true,
			true,
			true
		);
	}


	public function createService0112(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			$this->getService('0129'),
			$this->getService('017'),
			true,
			false
		);
	}


	public function createService0113(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0133'));
	}


	public function createService0114(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0115(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0116'),
			$this->getService('0118'),
			true,
			[
				'DatePeriod',
				'CallbackFilterIterator',
				'FilterIterator',
				'RecursiveCallbackFilterIterator',
				'AppendIterator',
				'NoRewindIterator',
				'LimitIterator',
				'InfiniteIterator',
				'CachingIterator',
				'RegexIterator',
			]
		);
	}


	public function createService0116(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0117(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			$this->getService('0116'),
			$this->getService('0136'),
			true
		);
	}


	public function createService0118(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0119(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0131'), $this->getService('0132'), true, true, true);
	}


	public function createService0120(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0133'),
			false,
			true
		);
	}


	public function createService0121(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0133'),
			$this->getService('0101'),
			false,
			true
		);
	}


	public function createService0122(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService0123(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('017'));
	}


	public function createService0124(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			$this->getService('reflectionProvider'),
			true,
			true,
			true,
			false,
			[
				'DatePeriod',
				'CallbackFilterIterator',
				'FilterIterator',
				'RecursiveCallbackFilterIterator',
				'AppendIterator',
				'NoRewindIterator',
				'LimitIterator',
				'InfiniteIterator',
				'CachingIterator',
				'RegexIterator',
			]
		);
	}


	public function createService0125(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0126(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('056'));
	}


	public function createService0127(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0128(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper($this->getService('073'));
	}


	public function createService0129(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0130(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('056'));
	}


	public function createService0131(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0132(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0133(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), true, false, true, true, false, true, false);
	}


	public function createService0134(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0135(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('091'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('027'),
			$this->getService('026'),
			$this->getService('016'),
			$this->getService('063')
		);
	}


	public function createService0136(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('031'),
			$this->getService('029'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0137(): PHPStan\Type\TypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('056'));
	}


	public function createService0138(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0139(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0141(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0142(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0143(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0144(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0145(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0146(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0147(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0148(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0149(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0150(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0151(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0152(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0153(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('017'));
	}


	public function createService0154(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0155(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0156(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0157(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0158(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0159(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0160(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0161(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension;
	}


	public function createService0165(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('017'));
	}


	public function createService0166(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0167(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('017'));
	}


	public function createService0168(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('017'));
	}


	public function createService0171(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0172(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0174(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(true);
	}


	public function createService0175(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0177(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0178(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0179(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension;
	}


	public function createService0180(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0183(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0184(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0185(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension;
	}


	public function createService0186(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension('DateTimeImmutable');
	}


	public function createService0187(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0188(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('017'));
	}


	public function createService0191(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0192(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0193(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0195(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('017'));
	}


	public function createService0197(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0198(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0138'));
	}


	public function createService0199(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0200(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0201(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0202(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0203(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0204(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0205(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0206(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0207(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0208(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0132'));
	}


	public function createService0209(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0211(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0212(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0213(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0138'));
	}


	public function createService0214(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0215(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0216(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0217(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0218(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('017'));
	}


	public function createService0219(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0220(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('017'));
	}


	public function createService0221(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0222(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0223(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0225(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0226(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0227(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0230(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension;
	}


	public function createService0231(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0232(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0233(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension;
	}


	public function createService0234(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0235(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0236(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0237(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0238(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0239(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0240(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0241(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0242(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0243(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0244(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0245(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0246(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension(true);
	}


	public function createService0247(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0207'));
	}


	public function createService0248(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0249(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0252'));
	}


	public function createService0250(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0251(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0252'));
	}


	public function createService0252(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0253(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0254(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0138')
		);
	}


	public function createService0255(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass'],
			true
		);
	}


	public function createService0256(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0257(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0258(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('017'));
	}


	public function createService0259(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0260(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0261(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0262(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0263(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0264(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0265(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0266(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0267(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0268(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0269(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0270(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0271(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('073'),
			$this->getService('0276'),
			$this->getService('originalBetterReflectionReflector'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0272(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0275'),
			$this->getService('0276'),
			$this->getService('083'),
			$this->getService('080'),
			$this->getService('078'),
			$this->getService('081'),
			$this->getService('077'),
			[],
			[],
			$this->parameters['analysedPaths'],
			[
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/vendor/phpstan/phpstan/..',
				'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			],
			$this->parameters['analysedPathsFromConfig'],
			$this->parameters['singleReflectionFile']
		);
	}


	public function createService0273(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_3c38ef4466 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\Reflector\Reflector $reflector): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
			{
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('091'),
					$this->container->getService('073'),
					$this->container->getService('059'),
					$reflector,
					$this->container->getService('0135'),
					$this->container->getService('025'),
					$this->container->getService('017'),
					$this->container->getService('092'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('072'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('016'),
					$this->container->getService('063'),
					$this->container->getService('0275')
				);
			}
		};
	}


	public function createService0274(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('017')
		);
	}


	public function createService0275(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0274')->create();
	}


	public function createService0276(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0277(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService0278(): PHPStan\Rules\Api\ApiClassConstFetchRule
	{
		return new PHPStan\Rules\Api\ApiClassConstFetchRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createService0279(): PHPStan\Rules\Api\ApiInstanceofRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createService0280(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule($this->getService('056'));
	}


	public function createService0281(): PHPStan\Rules\Api\RuntimeReflectionFunctionRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionFunctionRule($this->getService('reflectionProvider'));
	}


	public function createService0282(): PHPStan\Rules\Api\RuntimeReflectionInstantiationRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionInstantiationRule($this->getService('reflectionProvider'));
	}


	public function createService0283(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('0101'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0284(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			true
		);
	}


	public function createService0285(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			true
		);
	}


	public function createService0286(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0287(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(true);
	}


	public function createService0288(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule(
			$this->getService('017'),
			$this->getService('0122'),
			true,
			$this->getService('0123')
		);
	}


	public function createService0289(): PHPStan\Rules\Methods\ConsistentConstructorRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorRule($this->getService('0123'));
	}


	public function createService0290(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, true);
	}


	public function createService0291(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			false
		);
	}


	public function createService0292(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			false
		);
	}


	public function createService0293(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(false);
	}


	public function createService0294(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0133'),
			true,
			false
		);
	}


	public function createService0295(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0133'),
			$this->getService('0101')
		);
	}


	public function createService0296(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			$this->getService('0129'),
			$this->getService('017'),
			true,
			false
		);
	}


	public function createService0297(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0133'),
			$this->getService('017'),
			false,
			true
		);
	}


	public function createService0298(): PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule($this->getService('0308'));
	}


	public function createService0299(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule(true, false);
	}


	public function createService0300(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule;
	}


	public function createService0301(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('0308'));
	}


	public function createService0302(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0133'),
			$this->getService('0131'),
			$this->getService('0132'),
			false
		);
	}


	public function createService0303(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0131'),
			$this->getService('0132'),
			$this->getService('0133'),
			false
		);
	}


	public function createService0304(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0305(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0306(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule;
	}


	public function createService0307(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule([], $this->getService('reflectionProvider'), $this->getService('029'));
	}


	public function createService0308(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper([]);
	}


	public function createService0309(): PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule
	{
		return new PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule($this->getService('017'));
	}


	public function createService0310(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule(
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			$this->getService('0116'),
			$this->getService('0124'),
			$this->getService('0129'),
			true
		);
	}


	public function createService0311(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('0111'), $this->getService('0133'), true);
	}


	public function createService0312(): PHPStan\Rules\Methods\IllegalConstructorMethodCallRule
	{
		return new PHPStan\Rules\Methods\IllegalConstructorMethodCallRule;
	}


	public function createService0313(): PHPStan\Rules\Methods\IllegalConstructorStaticCallRule
	{
		return new PHPStan\Rules\Methods\IllegalConstructorStaticCallRule;
	}


	public function createService0314(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('0135'),
			$this->getService('reflectionProvider'),
			$this->getService('0101'),
			$this->getService('0116'),
			$this->getService('0124'),
			$this->getService('0129'),
			true,
			true
		);
	}


	public function createService0315(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule($this->getService('0133'), true);
	}


	public function createService0316(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(true);
	}


	public function createService0317(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule($this->getService('0133'), $this->getService('0100'), true);
	}


	public function createService0318(): PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0319(): PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0320(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('0133'), true);
	}


	public function createService0321(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(true);
	}


	public function createService0322(): PHPStan\Rules\Arrays\ArrayUnpackingRule
	{
		return new PHPStan\Rules\Arrays\ArrayUnpackingRule($this->getService('017'), $this->getService('0133'));
	}


	public function createService0323(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule($this->getService('0132'));
	}


	public function createService0324(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule($this->getService('0132'), $this->getService('0308'));
	}


	public function createService0325(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(false, true);
	}


	public function createService0326(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('0102'), true, true);
	}


	public function createService0327(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('0102'), true, true);
	}


	public function createService0328(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('0102'), true);
	}


	public function createService0329(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('0130'), [], [], false);
	}


	public function createService0330(): PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule($this->getService('0102'), true);
	}


	public function createService0331(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('0102'), true);
	}


	public function createService0332(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('0102'), true);
	}


	public function createService0333(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('0103'), false, true);
	}


	public function createService0334(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('0103'), false, true);
	}


	public function createService0335(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('0103'), false, true);
	}


	public function createService0336(): PHPStan\Rules\Comparison\MatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\MatchExpressionRule(false);
	}


	public function createService0337(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule(false, true);
	}


	public function createService0338(): PHPStan\Rules\Comparison\ConstantLooseComparisonRule
	{
		return new PHPStan\Rules\Comparison\ConstantLooseComparisonRule(false);
	}


	public function createService0339(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('0102'), true);
	}


	public function createService0340(): PHPStan\Rules\Comparison\UnreachableIfBranchesRule
	{
		return new PHPStan\Rules\Comparison\UnreachableIfBranchesRule($this->getService('0102'), true);
	}


	public function createService0341(): PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule
	{
		return new PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule($this->getService('0102'), true);
	}


	public function createService0342(): PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule($this->getService('0102'), true);
	}


	public function createService0343(): PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule($this->getService('0102'), true);
	}


	public function createService0344(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false);
	}


	public function createService0345(): PHPStan\Rules\Properties\NullsafePropertyFetchRule
	{
		return new PHPStan\Rules\Properties\NullsafePropertyFetchRule;
	}


	public function createService0346(): PHPStan\Rules\Traits\TraitDeclarationCollector
	{
		return new PHPStan\Rules\Traits\TraitDeclarationCollector;
	}


	public function createService0347(): PHPStan\Rules\Traits\TraitUseCollector
	{
		return new PHPStan\Rules\Traits\TraitUseCollector;
	}


	public function createService0348(): PHPStan\Rules\Traits\NotAnalysedTraitRule
	{
		return new PHPStan\Rules\Traits\NotAnalysedTraitRule;
	}


	public function createService0349(): PHPStan\Rules\Functions\RandomIntParametersRule
	{
		return new PHPStan\Rules\Functions\RandomIntParametersRule($this->getService('reflectionProvider'), true);
	}


	public function createService0350(): PHPStan\Rules\Functions\ArrayFilterRule
	{
		return new PHPStan\Rules\Functions\ArrayFilterRule($this->getService('reflectionProvider'));
	}


	public function createService0351(): SzepeViktor\PHPStan\WordPress\WpThemeGetDynamicMethodReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\WpThemeGetDynamicMethodReturnTypeExtension;
	}


	public function createService0352(): SzepeViktor\PHPStan\WordPress\IsWpErrorFunctionTypeSpecifyingExtension
	{
		return new SzepeViktor\PHPStan\WordPress\IsWpErrorFunctionTypeSpecifyingExtension;
	}


	public function createService0353(): SzepeViktor\PHPStan\WordPress\WpThemeMagicPropertiesClassReflectionExtension
	{
		return new SzepeViktor\PHPStan\WordPress\WpThemeMagicPropertiesClassReflectionExtension;
	}


	public function createService0354(): SzepeViktor\PHPStan\WordPress\GetListTableDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetListTableDynamicFunctionReturnTypeExtension;
	}


	public function createService0355(): SzepeViktor\PHPStan\WordPress\RedirectCanonicalDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\RedirectCanonicalDynamicFunctionReturnTypeExtension;
	}


	public function createService0356(): SzepeViktor\PHPStan\WordPress\StringOrArrayDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\StringOrArrayDynamicFunctionReturnTypeExtension;
	}


	public function createService0357(): SzepeViktor\PHPStan\WordPress\GetTermsDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetTermsDynamicFunctionReturnTypeExtension;
	}


	public function createService0358(): SzepeViktor\PHPStan\WordPress\GetPostDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetPostDynamicFunctionReturnTypeExtension;
	}


	public function createService0359(): SzepeViktor\PHPStan\WordPress\GetPostsDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetPostsDynamicFunctionReturnTypeExtension;
	}


	public function createService0360(): SzepeViktor\PHPStan\WordPress\GetSitesDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetSitesDynamicFunctionReturnTypeExtension;
	}


	public function createService0361(): SzepeViktor\PHPStan\WordPress\GetTaxonomiesDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetTaxonomiesDynamicFunctionReturnTypeExtension;
	}


	public function createService0362(): SzepeViktor\PHPStan\WordPress\GetObjectTaxonomiesDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetObjectTaxonomiesDynamicFunctionReturnTypeExtension;
	}


	public function createService0363(): SzepeViktor\PHPStan\WordPress\GetCommentDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\GetCommentDynamicFunctionReturnTypeExtension;
	}


	public function createService0364(): SzepeViktor\PHPStan\WordPress\HasFilterDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\HasFilterDynamicFunctionReturnTypeExtension;
	}


	public function createService0365(): SzepeViktor\PHPStan\WordPress\ShortcodeAttsDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\ShortcodeAttsDynamicFunctionReturnTypeExtension;
	}


	public function createService0366(): SzepeViktor\PHPStan\WordPress\MySQL2DateDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\MySQL2DateDynamicFunctionReturnTypeExtension;
	}


	public function createService0367(): SzepeViktor\PHPStan\WordPress\CurrentTimeDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\CurrentTimeDynamicFunctionReturnTypeExtension;
	}


	public function createService0368(): SzepeViktor\PHPStan\WordPress\ApplyFiltersDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\ApplyFiltersDynamicFunctionReturnTypeExtension($this->getService('0135'));
	}


	public function createService0369(): SzepeViktor\PHPStan\WordPress\EchoParameterDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\EchoParameterDynamicFunctionReturnTypeExtension;
	}


	public function createService0370(): SzepeViktor\PHPStan\WordPress\WPErrorParameterDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\WPErrorParameterDynamicFunctionReturnTypeExtension($this->getService('031'));
	}


	public function createService0371(): SzepeViktor\PHPStan\WordPress\TermExistsDynamicFunctionReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\TermExistsDynamicFunctionReturnTypeExtension;
	}


	public function createService0372(): SzepeViktor\PHPStan\WordPress\WpParseUrlFunctionDynamicReturnTypeExtension
	{
		return new SzepeViktor\PHPStan\WordPress\WpParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0373(): SzepeViktor\PHPStan\WordPress\HookDocsVisitor
	{
		return new SzepeViktor\PHPStan\WordPress\HookDocsVisitor;
	}


	public function createService0374(): SzepeViktor\PHPStan\WordPress\AssertWpErrorTypeSpecifyingExtension
	{
		return new SzepeViktor\PHPStan\WordPress\AssertWpErrorTypeSpecifyingExtension;
	}


	public function createService0375(): SzepeViktor\PHPStan\WordPress\AssertNotWpErrorTypeSpecifyingExtension
	{
		return new SzepeViktor\PHPStan\WordPress\AssertNotWpErrorTypeSpecifyingExtension;
	}


	public function createService0376(): Understrap\PHPStan\GetThemeModReturnType
	{
		return new Understrap\PHPStan\GetThemeModReturnType;
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\BetterReflection\Reflector\ClassReflector
	{
		return new PHPStan\BetterReflection\Reflector\ClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\BetterReflection\Reflector\ConstantReflector
	{
		return new PHPStan\BetterReflection\Reflector\ConstantReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\BetterReflection\Reflector\FunctionReflector
	{
		return new PHPStan\BetterReflection\Reflector\FunctionReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('091'),
			$this->getService('073'),
			$this->getService('059'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0135'),
			$this->getService('025'),
			$this->getService('017'),
			$this->getService('092'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('072'),
			$this->getService('relativePathHelper'),
			$this->getService('016'),
			$this->getService('063'),
			$this->getService('0275')
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0272')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('056'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child/.phpstan-cache/cache/PHPStan');
	}


	public function createServiceContainer(): Container_3c38ef4466
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('currentPhpVersionLexer'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('currentPhpVersionLexer'),
			$this->getService('03'),
			$this->getService('056')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('017'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('0277'),
			true,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0104');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('064')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('064')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('063'), ['php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('063'), ['php']);
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('063'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser'),
			$this->parameters['singleReflectionFile']
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('02')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('056'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child',
			$this->parameters['analysedPaths']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('014'));
	}


	public function createServiceRules__100(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule(
			$this->getService('0135'),
			$this->getService('0116'),
			$this->getService('0129')
		);
	}


	public function createServiceRules__101(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule($this->getService('0116'), $this->getService('0129'));
	}


	public function createServiceRules__102(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('020'), $this->getService('023'));
	}


	public function createServiceRules__103(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('020'), $this->getService('023'));
	}


	public function createServiceRules__104(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('0135'));
	}


	public function createServiceRules__105(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('0135'));
	}


	public function createServiceRules__106(): PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule
	{
		return new PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule;
	}


	public function createServiceRules__107(): PHPStan\Rules\Arrays\ArrayDestructuringRule
	{
		return new PHPStan\Rules\Arrays\ArrayDestructuringRule($this->getService('0133'), $this->getService('0100'));
	}


	public function createServiceRules__108(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('0133'));
	}


	public function createServiceRules__109(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('0133'));
	}


	public function createServiceRules__11(): PHPStan\Rules\Arrays\EmptyArrayItemRule
	{
		return new PHPStan\Rules\Arrays\EmptyArrayItemRule;
	}


	public function createServiceRules__110(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('0133'));
	}


	public function createServiceRules__111(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('0133'));
	}


	public function createServiceRules__112(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('0133'));
	}


	public function createServiceRules__113(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('0113'));
	}


	public function createServiceRules__114(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('0113'));
	}


	public function createServiceRules__115(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('0113'));
	}


	public function createServiceRules__116(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('0133'));
	}


	public function createServiceRules__117(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('0113'));
	}


	public function createServiceRules__118(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('0133'));
	}


	public function createServiceRules__119(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule($this->getService('0132'), $this->getService('0308'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__120(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule($this->getService('0132'));
	}


	public function createServiceRules__121(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule(
			$this->getService('0133'),
			$this->getService('0131'),
			$this->getService('0132')
		);
	}


	public function createServiceRules__122(): PHPStan\Rules\Variables\ThrowTypeRule
	{
		return new PHPStan\Rules\Variables\ThrowTypeRule($this->getService('0133'));
	}


	public function createServiceRules__123(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('0133'));
	}


	public function createServiceRules__124(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createServiceRules__125(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule;
	}


	public function createServiceRules__126(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('014'));
	}


	public function createServiceRules__127(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createServiceRules__128(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule($this->getService('0126'));
	}


	public function createServiceRules__129(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule;
	}


	public function createServiceRules__13(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('017'));
	}


	public function createServiceRules__130(): PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule
	{
		return new PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule;
	}


	public function createServiceRules__131(): PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule
	{
		return new PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule;
	}


	public function createServiceRules__132(): PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__133(): PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__134(): PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule($this->getService('0133'));
	}


	public function createServiceRules__135(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule(
			$this->getService('0133'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__136(): PHPStan\Rules\Methods\NullsafeMethodCallRule
	{
		return new PHPStan\Rules\Methods\NullsafeMethodCallRule;
	}


	public function createServiceRules__137(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule;
	}


	public function createServiceRules__138(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule;
	}


	public function createServiceRules__139(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule;
	}


	public function createServiceRules__14(): PHPStan\Rules\Classes\AllowedSubTypesRule
	{
		return new PHPStan\Rules\Classes\AllowedSubTypesRule;
	}


	public function createServiceRules__140(): PHPStan\Rules\DateTimeInstantiationRule
	{
		return new PHPStan\Rules\DateTimeInstantiationRule;
	}


	public function createServiceRules__141(): PHPStan\Rules\Functions\ImplodeFunctionRule
	{
		return new PHPStan\Rules\Functions\ImplodeFunctionRule($this->getService('reflectionProvider'), $this->getService('0133'));
	}


	public function createServiceRules__142(): PHPStan\Rules\Constants\MissingClassConstantTypehintRule
	{
		return new PHPStan\Rules\Constants\MissingClassConstantTypehintRule($this->getService('0124'));
	}


	public function createServiceRules__143(): PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule($this->getService('0124'));
	}


	public function createServiceRules__144(): PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule($this->getService('0124'));
	}


	public function createServiceRules__145(): PHPStan\Rules\Methods\MissingMethodParameterTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodParameterTypehintRule($this->getService('0124'));
	}


	public function createServiceRules__146(): PHPStan\Rules\Methods\MissingMethodReturnTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodReturnTypehintRule($this->getService('0124'));
	}


	public function createServiceRules__147(): PHPStan\Rules\Properties\MissingPropertyTypehintRule
	{
		return new PHPStan\Rules\Properties\MissingPropertyTypehintRule($this->getService('0124'));
	}


	public function createServiceRules__148(): SzepeViktor\PHPStan\WordPress\HookCallbackRule
	{
		return new SzepeViktor\PHPStan\WordPress\HookCallbackRule($this->getService('0133'));
	}


	public function createServiceRules__149(): SzepeViktor\PHPStan\WordPress\HookDocsRule
	{
		return new SzepeViktor\PHPStan\WordPress\HookDocsRule($this->getService('0135'), $this->getService('0133'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('099'));
	}


	public function createServiceRules__150(): SzepeViktor\PHPStan\WordPress\IsWpErrorRule
	{
		return new SzepeViktor\PHPStan\WordPress\IsWpErrorRule($this->getService('0133'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('099'));
	}


	public function createServiceRules__17(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0133'),
			$this->getService('0101'),
			$this->getService('017')
		);
	}


	public function createServiceRules__18(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRules__19(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__2(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__20(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('0101'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__21(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('0101'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__22(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('0101'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__23(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__24(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('0111'),
			$this->getService('0101')
		);
	}


	public function createServiceRules__25(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createServiceRules__26(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('017'));
	}


	public function createServiceRules__27(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRules__28(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createServiceRules__29(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createServiceRules__3(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__30(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('017'));
	}


	public function createServiceRules__31(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('099'));
	}


	public function createServiceRules__32(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('017'));
	}


	public function createServiceRules__33(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('099'));
	}


	public function createServiceRules__34(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0125'));
	}


	public function createServiceRules__35(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0111')
		);
	}


	public function createServiceRules__36(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('099'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('017'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule($this->getService('0112'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0112'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__40(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0112'));
	}


	public function createServiceRules__41(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('099'));
	}


	public function createServiceRules__42(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__43(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('099'));
	}


	public function createServiceRules__44(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('017'));
	}


	public function createServiceRules__45(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0125'));
	}


	public function createServiceRules__46(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createServiceRules__47(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__48(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('0120'), $this->getService('0111'));
	}


	public function createServiceRules__49(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('0121'), $this->getService('0111'));
	}


	public function createServiceRules__5(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__50(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0112'));
	}


	public function createServiceRules__51(): PHPStan\Rules\Methods\FinalPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\FinalPrivateMethodRule($this->getService('017'));
	}


	public function createServiceRules__52(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0120'), $this->getService('017'));
	}


	public function createServiceRules__53(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__54(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('099'));
	}


	public function createServiceRules__55(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0121'), $this->getService('017'));
	}


	public function createServiceRules__56(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0125'));
	}


	public function createServiceRules__57(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0294'));
	}


	public function createServiceRules__58(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0295'));
	}


	public function createServiceRules__59(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule($this->getService('0308'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('098'));
	}


	public function createServiceRules__60(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('099'));
	}


	public function createServiceRules__61(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('017'));
	}


	public function createServiceRules__62(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule;
	}


	public function createServiceRules__63(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createServiceRules__64(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('0134'));
	}


	public function createServiceRules__65(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule;
	}


	public function createServiceRules__66(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('0134'));
	}


	public function createServiceRules__67(): PHPStan\Rules\Variables\EmptyRule
	{
		return new PHPStan\Rules\Variables\EmptyRule($this->getService('0119'));
	}


	public function createServiceRules__68(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('0119'));
	}


	public function createServiceRules__69(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('0119'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__70(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('0133'));
	}


	public function createServiceRules__71(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('0133'));
	}


	public function createServiceRules__72(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('014'), $this->getService('0133'));
	}


	public function createServiceRules__73(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('0133'));
	}


	public function createServiceRules__74(): PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule
	{
		return new PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule;
	}


	public function createServiceRules__75(): PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule;
	}


	public function createServiceRules__76(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__77(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('0115'), $this->getService('0114'));
	}


	public function createServiceRules__78(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('0117'));
	}


	public function createServiceRules__79(): PHPStan\Rules\Generics\EnumAncestorsRule
	{
		return new PHPStan\Rules\Generics\EnumAncestorsRule($this->getService('0115'), $this->getService('0114'));
	}


	public function createServiceRules__8(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('098'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__80(): PHPStan\Rules\Generics\EnumTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\EnumTemplateTypeRule;
	}


	public function createServiceRules__81(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('0135'), $this->getService('0117'));
	}


	public function createServiceRules__82(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('0118'));
	}


	public function createServiceRules__83(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('0115'), $this->getService('0114'));
	}


	public function createServiceRules__84(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('0117'));
	}


	public function createServiceRules__85(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('0135'), $this->getService('0117'));
	}


	public function createServiceRules__86(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('0118'));
	}


	public function createServiceRules__87(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('0135'), $this->getService('0117'));
	}


	public function createServiceRules__88(): PHPStan\Rules\Generics\UsedTraitsRule
	{
		return new PHPStan\Rules\Generics\UsedTraitsRule($this->getService('0135'), $this->getService('0115'));
	}


	public function createServiceRules__89(): PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule
	{
		return new PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule;
	}


	public function createServiceRules__9(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('098'));
	}


	public function createServiceRules__90(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__91(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('014'), $this->getService('0133'));
	}


	public function createServiceRules__92(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule;
	}


	public function createServiceRules__93(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('0133'));
	}


	public function createServiceRules__94(): PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule($this->getService('0127'));
	}


	public function createServiceRules__95(): PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule($this->getService('0127'));
	}


	public function createServiceRules__96(): PHPStan\Rules\PhpDoc\FunctionAssertRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionAssertRule($this->getService('0128'));
	}


	public function createServiceRules__97(): PHPStan\Rules\PhpDoc\MethodAssertRule
	{
		return new PHPStan\Rules\PhpDoc\MethodAssertRule($this->getService('0128'));
	}


	public function createServiceRules__98(): PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule;
	}


	public function createServiceRules__99(): PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule(
			$this->getService('0116'),
			$this->getService('0129'),
			$this->getService('073')
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/bacoords/Local Sites/understraptestsite/app/public/wp-content/themes/understrap-child');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('defaultAnalysisParser'),
			$this->getService('0135'),
			$this->getService('034')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('056'));
	}


	public function initialize()
	{
	}
}
