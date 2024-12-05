<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_aitext', language 'en'
 *
 * @package    qtype_aitext
 * @subpackage aitext
 * @copyright  2024 Marcus Green
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['acceptedfiletypes'] = 'Accepted file types';

$string['aiprompt'] = 'AI Prompt';
$string['aiprompt_help'] = 'A prompt for the Ai Grader. This is the guideline that AI uses to give feedback on the student response.';
$string['aipromptmissing'] = 'The ai prompt is missing. Please enter a prompt on the basis of which the feedback is generated.';
$string['answerfiles'] = 'Answer files';
$string['answertext'] = 'Answer text';
$string['attachmentsoptional'] = 'Attachments are optional';
$string['cachedef_stringdata'] = 'Cachedef stringdata';
$string['defaultmarksscheme'] = 'Marks scheme';
$string['defaultmarksscheme_setting'] = 'This will be the default marks scheme for new questions. Questions authors should alter this to suit the question.';
$string['defaultprompt'] = 'AI Prompt';
$string['defaultprompt_setting'] = 'This will be the default AI prompt for new questions. It tells the AI grader how to analyse the student response. It is the guideline that AI uses to give feedback on the student response. Question authors should alter this to suit the question.';
$string['disclaimer'] = 'Disclaimer';
$string['disclaimer_setting'] = 'Text appended to each response indicating feedback is from a Large Language Model and not a human';
$string['err_maxminmismatch'] = 'Maximum word limit must be greater than minimum word limit';
$string['err_maxwordlimit'] = 'Maximum word limit is enabled but is not set';
$string['err_maxwordlimitnegative'] = 'Maximum word limit cannot be a negative number';
$string['err_minwordlimit'] = 'Minimum word limit is enabled but is not set';
$string['err_minwordlimitnegative'] = 'Minimum word limit cannot be a negative number';
$string['formateditor'] = 'HTML editor';
$string['formateditorfilepicker'] = 'HTML editor with file picker';
$string['formatmonospaced'] = 'Plain text, monospaced font';
$string['formatnoinline'] = 'No online text';
$string['formatplain'] = 'Plain text';
$string['get_llmmfeedback'] = 'Get LLM feedback';
$string['graderinfo'] = 'Information for graders';
$string['graderinfoheader'] = 'Grader information';
$string['jsonprompt'] = 'JSon prompt';
$string['jsonprompt_setting'] = 'Instructions sent to convert the returned value into json';
$string['markscheme'] = 'Mark scheme';
$string['markscheme_help'] = 'This will tell the AI grader how to give a numerical grade to the student response. The total possible score is this question\'s \'Default mark\'';
$string['maxwordlimit'] = 'Maximum word limit';
$string['maxwordlimit_help'] = 'If the response requires that students enter text, this is the maximum number of words that each student will be allowed to submit.';
$string['maxwordlimitboundary'] = 'The word limit for this question is {$a->limit} words and you are attempting to submit {$a->count} words. Please shorten your response and try again.';
$string['minwordlimit'] = 'Minimum word limit';
$string['minwordlimit_help'] = 'If the response requires that students enter text, this is the minimum number of words that each student will be allowed to submit.';
$string['minwordlimitboundary'] = 'This question requires a response of at least {$a->limit} words and you are attempting to submit {$a->count} words. Please expand your response and try again.';
$string['model'] = 'Model';
$string['nlines'] = '{$a} lines';
$string['pluginname'] = 'AI Text';
$string['pluginname_help'] = 'In response to a question, the respondent enters text. A response template may be provided. Responses are given a preliminary grade by an AI system (e.g. ChatGPT) then can be graded manually.';
$string['pluginname_link'] = 'question/type/AI Text';
$string['pluginnameadding'] = 'Adding an AI Text question';
$string['pluginnameediting'] = 'Editing an AI Text question';
$string['pluginnamesummary'] = 'Allows a response of a file upload and/or online text. The student response is processed by the configured AI/Large language model which returns feedback and optionally a grade..';
$string['privacy::responsefieldlines'] = 'Number of lines indicating the size of the input box (textarea).';
$string['privacy:metadata'] = 'AI Text question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:attachments'] = 'Number of allowed attachments.';
$string['privacy:preference:attachmentsrequired'] = 'Number of required attachments.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:disclaimer']  = 'Text to indicate the feedback and/or marking is from a LLM';
$string['privacy:preference:maxbytes'] = 'Maximum file size.';
$string['privacy:preference:responseformat'] = 'What is the response format (HTML editor, plain text, etc.)?';
$string['prompt'] = 'Prompt';
$string['prompt_setting'] = 'Our prompt template. [response] is the commited text from the student, [solution] the provided sample solution and [question] is identical to the question the student gets.';
$string['prompttester'] = 'Prompt Tester';
$string['responsefieldlines'] = 'Input box size';
$string['responseformat'] = 'Response format';
$string['responseformat_setting'] = 'The editor the student uses when responding';
$string['responseoptions'] = 'Response options';
$string['responsenotrequired'] = 'Text input is optional';
$string['responseisrequired'] = 'Require the student to enter text';
$string['responsenotrequired'] = 'Text input is optional';
$string['responseoptions'] = 'Response options';
$string['responsetemplate'] = 'Response template';
$string['responsetemplate_help'] = 'Any text entered here will be displayed in the response input box when a new attempt at the question starts.';
$string['responsetemplateheader'] = 'Response template';
$string['sampleanswer'] = 'Sample Answer';
$string['sampleanswer_help'] = 'The sample answer can be used to test how the AI grader will respond to a given response.';
$string['sampleanswerempty'] = 'Make sure that you have an AI prompt and sample answer before testing.';
$string['sampleanswerevaluate'] = 'Evaluate Sample Answer';
$string['showprompt'] = 'Show prompt';
$string['thedefaultmarksscheme'] = 'Deduct a point from the total score for each grammar or spelling mistake.';
$string['thedefaultprompt'] = 'Provide an example solution for the model here.';
$string['untestedquestionbehaviour'] = 'Untested question behaviour';
$string['wordcount'] = 'Word count: {$a}';
$string['wordcounttoofew'] = 'Word count: {$a->count}, less than the required {$a->limit} words.';
$string['wordcounttoomuch'] = 'Word count: {$a->count}, more than the limit of {$a->limit} words.';
