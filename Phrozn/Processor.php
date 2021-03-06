<?php
/**
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *          http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category    Phrozn
 * @package     Phrozn\Processor
 * @author      Victor Farazdagi
 * @license     http://www.apache.org/licenses/LICENSE-2.0
 */

namespace Phrozn;

/**
 * Interface for text processing engines
 *
 * @category    Phrozn
 * @package     Phrozn\Processor
 * @author      Victor Farazdagi
 */
interface Processor
{
    /**
     * Parse the incoming template
     *
     * @param string $tpl Source template content
     * @param array $vars List of variables passed to template engine
     *
     * @return string Processed template
     */
    public function render($tpl, $vars = array());

    /**
     * Gateway to pass concrete Processor some configuration options
     *
     * @param array $options Options to pass to engine
     *
     * @return \Phrozn\Processor
     */
    public function setConfig($options);

    /**
     * Get processor configuration
     *
     * @return array
     */
    public function getConfig();
}
