<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= 'Este campo é obrigatório.';
$lang['form_validation_isset']			= '{field} Este campo deve ter um valor.';
$lang['form_validation_valid_email']		= '{field} Este campo deve conter um endereço de email válido.';
$lang['form_validation_valid_emails']		= '{field} Este campo deve conter todos os endereços de email válido.';
$lang['form_validation_valid_url']		= '{field} Este campo deve conter uma URL válido.';
$lang['form_validation_valid_ip']		= '{field} Este campo deve conter um IP válido.';
$lang['form_validation_valid_base64']		= '{field} Este campo deve conter um Base64 string válido.';
$lang['form_validation_min_length']		= '{field} Este campo deve ter pelo menos {param} tamanho de caracteres.';
$lang['form_validation_max_length']		= '{field} Este campo excede em {param} tamanho de caracteres.';
$lang['form_validation_exact_length']		= '{field} Este campo deve ser exatamente {param} tamanho de caracteres.';
$lang['form_validation_alpha']			= '{field} Este campo pode conter apenas caracter alfabético.';
$lang['form_validation_alpha_numeric']		= '{field} Este campo pode conter apenas caracter alfanumérico.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} Este campo pode conter apenas caracteres alfanuméricos e espaços.';
$lang['form_validation_alpha_dash']		= '{field} Este campo pode conter apenas caracteres alfanuméricos, underscore e dashes.';
$lang['form_validation_numeric']		= '{field} Este campo deve conter apenas numeros.';
$lang['form_validation_is_numeric']		= '{field} Este campo deve conter apenas caracteres numéricos.';
$lang['form_validation_integer']		= '{field} Este campo deve conter apenas um inteiro.';
$lang['form_validation_regex_match']		= '{field} Este campo não está no formato correto.';
$lang['form_validation_matches']		= '{field} Este campo não corresponde ao campo {param}.';
$lang['form_validation_differs']		= '{field} field must differ from the {param} field.';
$lang['form_validation_is_unique'] 		= '{field} Este campo deve conter um valor único.';
$lang['form_validation_is_natural']		= '{field} Este campo deve conter apenas dígitos.';
$lang['form_validation_is_natural_no_zero']	= '{field} Este campo deve conter apenas digitos e deve ser maior que zero.';
$lang['form_validation_decimal']		= '{field} Este campo deve conter um número decimal.';
$lang['form_validation_less_than']		= '{field} Este campo deve conter um número menor que {param}.';
$lang['form_validation_less_than_equal_to']	= '{field} Este campo deve conter um número menor ou igual a {param}.';
$lang['form_validation_greater_than']		= '{field} Este campo deve conter um número maior que {param}.';
$lang['form_validation_greater_than_equal_to']	= '{field} Este campo deve conter um número maior ou igual a {param}.';
$lang['form_validation_error_message_not_set']	= 'Indisponível acesso a mensagem de erro correspondente ao nome do campo {field}.';
$lang['form_validation_in_list']		= '{field} Este campo deve ser um de: {param}.';
