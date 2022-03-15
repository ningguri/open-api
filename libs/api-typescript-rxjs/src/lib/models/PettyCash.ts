// tslint:disable
/**
 * FlowAccount Business API
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

import {
    BankingChannelsStatus,
    ChartOfAccount,
    User,
} from './';

/**
 * @export
 * @interface PettyCash
 */
export interface PettyCash {
    /**
     * @type {number}
     * @memberof PettyCash
     */
    id?: number;
    /**
     * @type {number}
     * @memberof PettyCash
     */
    companyId: number;
    /**
     * @type {string}
     * @memberof PettyCash
     */
    createdOn?: string;
    /**
     * @type {string}
     * @memberof PettyCash
     */
    modifiedOn?: string;
    /**
     * @type {boolean}
     * @memberof PettyCash
     */
    isDelete?: boolean;
    /**
     * @type {string}
     * @memberof PettyCash
     */
    description?: string | null;
    /**
     * @type {string}
     * @memberof PettyCash
     */
    name?: string | null;
    /**
     * @type {number}
     * @memberof PettyCash
     */
    cashLimit?: number;
    /**
     * @type {number}
     * @memberof PettyCash
     */
    chartOfAccountId?: number | null;
    /**
     * @type {ChartOfAccount}
     * @memberof PettyCash
     */
    chartOfAccount?: ChartOfAccount | null;
    /**
     * @type {number}
     * @memberof PettyCash
     */
    cashHolderId?: number;
    /**
     * @type {User}
     * @memberof PettyCash
     */
    cashHolder?: User | null;
    /**
     * @type {BankingChannelsStatus}
     * @memberof PettyCash
     */
    status?: BankingChannelsStatus;
    /**
     * @type {string}
     * @memberof PettyCash
     */
    cashHolderName?: string | null;
    /**
     * @type {number}
     * @memberof PettyCash
     */
    remainingBalance?: number;
}
